FROM php:8.1.0-fpm
RUN apt-get update && docker-php-ext-install mysqli
RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug
WORKDIR /app
CMD php -S 0.0.0.0:8080