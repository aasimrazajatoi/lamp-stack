FROM nginx:latest
VOLUME ./www/html /var/www/html/
VOLUME ./nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf


FROM php:7.0-fpm
VOLUME ./www/html/ /var/www/html/
EXPOSE 9000
RUN docker-php-ext-install pdo_mysql




FROM mysql
ENV MYSQL_ROOT_PASSWORD=secret  
ENV MYSQL_DATABASE=mydb  
ENV MYSQL_USER=myuser  
ENV MYSQL_PASSWORD=password
VOLUME ./www/html/ /var/lib/mysql
