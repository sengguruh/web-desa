#!/bin/bash

chown -Rf www-data:www-data /var/www/html
chown -Rf root:root /var/www/html/.docker
chmod -Rf 600 /var/www/html/.docker
php-fpm -D &&  nginx -g "daemon off;"
