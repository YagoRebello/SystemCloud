version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    container_name: laravel_app
    restart: unless-stopped
    working_dir: /var/www/html
    volumes:
      - .:/var/www/html
    networks:
      - laravel_network

  db:
    image: mysql:8.0
    container_name: laravel_db
    restart: unless-stopped
    environment:
      MYSQL_DATABASE: laravel
      MYSQL_USER: laravel_user
      MYSQL_PASSWORD: secret
      MYSQL_ROOT_PASSWORD: secret
    ports:
      - "3306:3306"
    volumes:
      - ./docker/mysql:/var/lib/mysql
    networks:
      - laravel_network

networks:
  laravel_network:
    driver: bridge

    Dockerfile:

    
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
