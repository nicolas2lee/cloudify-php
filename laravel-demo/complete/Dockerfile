#FROM nginx:1.18.0-alpine
FROM php:7.2.5-fpm-alpine

MAINTAINER nicolas2lee <nicolas2lee@gmail.com>

# install nginx
RUN mkdir -p /run/nginx
RUN apk update && apk add nginx

# install pgsql driver
RUN set -ex && apk --no-cache add postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Create a group and user
#RUN addgroup -S web && usermod -aG web root
#adduser -S web -G web

COPY demo-nginx.conf /etc/nginx/conf.d/demo-nginx.conf

WORKDIR /var/www/demo
COPY . /var/www/demo

# optimization
RUN composer install --optimize-autoloader --no-dev


#RUN chown -R :web /var/www/demo/storage
#RUN chown -R :web /var/www/demo/bootstrap/cache
#RUN chmod -R 775 /var/www/demo/storage
#RUN chmod -R 775 /var/www/demo/bootstrap/cache

# TODO to check
RUN chmod -R 777 /var/www/demo/storage/framework && chmod -R 777 /var/www/demo/storage/logs

# laravel optimization
RUN php artisan config:cache
#RUN php artisan route:cache
RUN php artisan view:cache


#ENTRYPOINT ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=8000"]
CMD ["sh", "-c", "nginx && php-fpm "]

#nginx -g 'Daemon off;'
#php-fpm -h --pid /var/run/php/php7.2-fpm.soc
