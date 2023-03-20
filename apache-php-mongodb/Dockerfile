FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y libssl-dev libcurl4-openssl-dev libzip-dev \
    && pecl install mongodb && docker-php-ext-enable mongodb

# RUN echo "extension=mongodb.so" >> /usr/local/etc/php/php.ini
# RUN echo "extension=mongodb.so" >> `php --ini | grep "Loaded Configuration" | sed -e "s|.*:\s*||"`
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini