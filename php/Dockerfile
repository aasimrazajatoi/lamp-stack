FROM php:7.0-fpm
# VOLUME ./www/html/ /var/www/html/
# EXPOSE 9000
RUN docker-php-ext-install pdo_mysql

RUN apt install nginx

CMD ["php index.php"]
