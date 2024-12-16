FROM php:8.2-cli-alpine
RUN docker-php-ext-install pdo pdo_mysql
COPY index.php /var/www/html/index.php
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
