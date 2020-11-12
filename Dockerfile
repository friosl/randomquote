FROM php:7.2-apache-stretch 
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer 
COPY . /var/www
RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www
COPY . /var/www/html 
WORKDIR /var/www/html 
RUN composer install \ 
    --ignore-platform-reqs \ 
    --no-scripts \ 
    --prefer-dist 
RUN a2enmod rewrite 
RUN service apache2 restart
