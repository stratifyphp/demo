#!/usr/bin/env bash

set -e

apt-get update -qq

# PHP 7
add-apt-repository ppa:ondrej/php-7.0

apt-get update -qq

apt-get install -y --quiet git curl apache2-utils nginx php7.0 php7.0-fpm

# Nginx
cp /vagrant/vagrant/nginx/default /etc/nginx/sites-available/

# PHP
cp /vagrant/vagrant/php/custom.ini /etc/php/7.0/fpm/conf.d/
cp /vagrant/vagrant/php/custom.ini /etc/php/7.0/cli/conf.d/

/etc/init.d/nginx restart
/etc/init.d/php7.0-fpm restart

# Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
