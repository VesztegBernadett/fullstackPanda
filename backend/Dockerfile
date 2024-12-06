FROM php:8.3.8-fpm-alpine3.20

RUN adduser -u 1000 -s /bin/fish -D phpdocker


WORKDIR /www

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk update && apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    zip \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    curl \
    oniguruma-dev \
    libxml2-dev \
    vim \
    fish
    

RUN docker-php-ext-configure gd --with-jpeg

RUN docker-php-ext-install  pdo \
                            pdo_mysql \
                            zip \
                            exif \
                            pcntl \
                            gd
USER phpdocker


CMD ["php-fpm"]
