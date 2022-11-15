FROM php:8.1-cli
WORKDIR /app
RUN apt-get update && docker-php-ext-install mysqli
CMD php -S 0.0.0.0:8080