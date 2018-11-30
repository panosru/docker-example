#++++++++++++++++++++++++++++++++++++++
# PHP application Docker container
#++++++++++++++++++++++++++++++++++++++

FROM php:7.2.12-fpm

RUN pecl install swoole && docker-php-ext-enable swoole

# Set Volumes
VOLUME ["/var/www", "/usr/local/etc", "/tmp/debug", "/var/resources"]

#RUN chmod +x /var/www/bootstrap.sh

# Configure volume/workdir
WORKDIR /var/www/

#ENTRYPOINT ["/var/www/bootstrap.sh"]
