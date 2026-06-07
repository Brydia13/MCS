#!/bin/sh
set -e

mkdir -p /app/database /app/storage/framework/views /app/storage/framework/cache /app/storage/framework/sessions
chmod -R 777 /app/storage/framework

php /app/artisan migrate --force

TENANT_COUNT=$(php /app/artisan tinker --execute="echo \App\Models\Tenant::count();" 2>/dev/null || echo "0")
if [ "$TENANT_COUNT" = "0" ]; then
    php /app/artisan db:seed --force
fi

php /app/artisan config:cache
php /app/artisan route:cache

cat > /etc/supervisord.conf << 'SUPERVISOR_EOF'
[supervisord]
nodaemon=true
logfile=/tmp/supervisord.log
pidfile=/tmp/supervisord.pid

[program:nginx]
command=nginx -g "daemon off;"
autostart=true
autorestart=true
stdout_logfile=/tmp/nginx.log
stderr_logfile=/tmp/nginx-error.log

[program:php-fpm]
command=php-fpm -F
autostart=true
autorestart=true
stdout_logfile=/tmp/php-fpm.log
stderr_logfile=/tmp/php-fpm-error.log
SUPERVISOR_EOF

exec /usr/bin/supervisord -n -c /etc/supervisord.conf
