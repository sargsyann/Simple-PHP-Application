FROM php:8.0-apache
ADD site /var/www/html
RUN docker-php-ext-install -j$(nproc) mysqli