#!/bin/bash
cd /home/site/wwwroot
cat > .env << EOF
APP_NAME="MCS - Evidencia"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://evidencia-mcs-gwapbehuegeraues.eastus-01.azurewebsites.net
DB_CONNECTION=sqlite
SESSION_DRIVER=file
CACHE_STORE=file
EOF
php artisan key:generate --force
php artisan migrate --force
php artisan db:seed --force
