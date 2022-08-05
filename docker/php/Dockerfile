FROM php:5.6-fpm

COPY . /var/www
WORKDIR /var/www
COPY php.ini-production /usr/local/etc/php/conf.d/php.ini

RUN apt-get update && \
    apt-get install -y \
    git \
    zip \
    curl \

    libpng-dev \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev libxpm-dev \
    libfreetype6-dev \
    libmcrypt-dev \

    && docker-php-ext-configure gd \
    --with-gd \
    --with-webp-dir \
    --with-jpeg-dir \
    --with-png-dir \
    --with-zlib-dir \
    --with-xpm-dir \
    --with-freetype-dir \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd

RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

RUN docker-php-ext-install pdo_mysql mysqli
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-install gettext mcrypt

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

EXPOSE 9000
CMD ["php-fpm"]

