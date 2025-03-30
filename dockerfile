FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

# Instala dependências do sistema
RUN apk add --no-cache \
    $PHPIZE_DEPS \
    linux-headers \
    nodejs \
    npm \
    && pecl install xdebug-3.2.0 \
    && docker-php-ext-enable xdebug

# Instala extensões do PHP
RUN docker-php-ext-install pdo pdo_mysql

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cria um usuário para o Laravel
RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

# Define o usuário padrão
USER laravel