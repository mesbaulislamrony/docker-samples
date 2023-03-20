FROM php:8.2-apache

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update && apt-get upgrade -y

# Install Postgre mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Install Postgre mongodb
RUN apt-get install -y libssl-dev libcurl4-openssl-dev libzip-dev
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

# Install Postgre PDO
RUN apt-get install -y libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Install Postgre redis
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini


# Install composer
RUN apt-get install -y libcurl4-gnutls-dev git zip
RUN docker-php-ext-install curl bcmath sockets

RUN curl --silent --show-error https://getcomposer.org/installer | php \
	&& mkdir -p /usr/local/bin \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x  /usr/local/bin/composer

RUN mkdir -p /home/composer && chmod 777 /home/composer

EXPOSE 25672 15672