FROM php:fpm

RUN pecl install mongodb
RUN docker-php-ext-enable mongodb
