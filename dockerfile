FROM php:8.0-apache
ADD data /var/www/html
RUN docker-php-ext-install -j$(nproc) mysqli