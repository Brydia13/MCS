FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    sqlite-dev \
    libzip-dev \
    oniguruma-dev \
    && docker-php-ext-install pdo_sqlite zip mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction && \
    chmod -R 777 storage bootstrap/cache

RUN cp .env.example .env && \
    sed -i "s/APP_ENV=local/APP_ENV=production/" .env && \
    sed -i "s/APP_DEBUG=true/APP_DEBUG=false/" .env && \
    sed -i "s/DB_CONNECTION=.*/DB_CONNECTION=sqlite/" .env && \
    sed -i "s/SESSION_DRIVER=.*/SESSION_DRIVER=file/" .env && \
    sed -i "s/CACHE_STORE=.*/CACHE_STORE=file/" .env && \
    php artisan key:generate --force

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
