FROM php:7.2-cli

RUN usermod -u 1000 www-data
RUN groupmod -g 1000 www-data

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip unzip php-zip

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN mkdir /var/www && mkdir /var/www/.composer && chown www-data:www-data /var/www/.composer
