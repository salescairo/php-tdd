FROM php:7.4-alpine

RUN apt-get update && apt-get install git -y

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
