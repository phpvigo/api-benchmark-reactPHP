FROM rolandocaldas/php:7.4

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN docker-php-ext-install pcntl

COPY ./ /application

RUN composer install && composer dump-autoload

EXPOSE 8000

CMD ["php", "/application/vendor/bin/server", "watch", "0.0.0.0:8000"]