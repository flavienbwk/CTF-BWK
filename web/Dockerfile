FROM php:7.3.5-fpm

RUN apt-get update

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring

EXPOSE 9000

CMD php-fpm