FROM php:8.1

RUN apt-get update -y \
  && apt-get install -y \
    libxml2-dev \
  && docker-php-ext-install pdo pdo_mysql soap 