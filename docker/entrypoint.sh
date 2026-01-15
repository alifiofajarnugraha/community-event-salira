#!/bin/sh
set -e

if [ ! -e /var/www/html/public/storage ]; then
  php artisan storage:link || true
fi

exec "$@"
