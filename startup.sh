#!/bin/bash
# Configure nginx for Laravel on Azure Linux App Service

NGINX_CONF="/etc/nginx/sites-available/default.conf"

if [ -f "$NGINX_CONF" ]; then
    # Set document root to public/
    sed -i 's|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g' "$NGINX_CONF"
    
    # Add try_files for URL rewriting in the location / block
    if ! grep -q "try_files" "$NGINX_CONF"; then
        sed -i '/location \/ {/a\        try_files $uri $uri/ /index.php?$query_string;' "$NGINX_CONF"
    fi
    
    service nginx restart 2>/dev/null || nginx -s reload 2>/dev/null || true
fi

# Run Laravel migrations
cd /home/site/wwwroot && php artisan migrate --force 2>/dev/null || true
