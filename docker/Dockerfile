FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev 

# Enabled rewrite apache
RUN a2enmod rewrite;

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets mysqli

# Install XDEBUG version latest
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy config php.ini
COPY php/php-additional.ini /usr/local/etc/php/conf.d/php-additional.ini

RUN usermod -u 1000 www-data
