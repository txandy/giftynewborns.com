# File: `docker/php/Dockerfile`
FROM php:8.4-fpm

# Instalar dependencias del sistema y extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev libicu-dev zip curl \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip opcache \
  && pecl install xdebug-3.2.2 || true \
  && docker-php-ext-enable xdebug || true \
  && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
  && apt-get install -y nodejs \
  && apt-get clean && rm -rf /var/lib/apt/lists/*


RUN pecl install redis || true \
  && docker-php-ext-enable redis || true

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY docker/php/php.ini /etc/php/8.4/fpm/conf.d/90-custom.ini

RUN addgroup --gid 1000 laravel
RUN adduser --ingroup laravel --shell /bin/sh laravel

WORKDIR /var/www/html

USER laravel

CMD ["php-fpm"]
