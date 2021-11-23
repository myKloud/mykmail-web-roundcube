FROM php:7.2-apache

RUN apt-get update \
    && apt-get install -y zlib1g-dev libicu-dev g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-configure mysqli \
    && docker-php-ext-install mysqli \ 
    && docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install  pdo_mysql \
    && docker-php-ext-enable  pdo_mysql 