FROM php:8.2-apache

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update
RUN apt-get install -y libcurl4-gnutls-dev git zip
RUN docker-php-ext-install curl bcmath sockets

RUN curl --silent --show-error https://getcomposer.org/installer | php \
	&& mkdir -p /usr/local/bin \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x  /usr/local/bin/composer

RUN mkdir -p /home/composer && chmod 777 /home/composer

EXPOSE 25672 15672