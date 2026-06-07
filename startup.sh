#!/bin/bash
# Laravel startup script for Azure Linux App Service
# This runs before the container starts

# Ensure the nginx document root points to public/
if [ -d "/home/site/wwwroot/public" ]; then
  # Remove default index.html if present
  rm -f /home/site/wwwroot/index.html

  # Restart nginx to pick up the correct root
  service nginx restart 2>/dev/null || true
fi

# Run Laravel migrations
cd /home/site/wwwroot
php artisan migrate --force 2>/dev/null || true
