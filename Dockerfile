FROM php:8.2-apache

# add application
COPY . /var/www/html

# start webserver
CMD ["apache2-foreground"]

