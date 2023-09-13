FROM php:7.4-fpm AS php
RUN apt-get update && apt-get install -y \
		libfreetype-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
        libwebp-dev \
        zlib1g-dev \ 
        libzip-dev \
        libonig-dev \
        libxml2-dev \
        libpq-dev \
        libxslt-dev \
        libicu-dev \
        libmcrypt-dev \
        libmagickwand-dev \
        libmagickcore-dev \
        make \
        unzip \
        curl \
        libgmp-dev \
        locales \
        libonig-dev \
        jpegoptim optipng pngquant gifsicle \
        vim \
        nginx \
        tidy \
    && apt-get upgrade -y \
    && docker-php-ext-install gmp \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql mbstring \
    && docker-php-ext-install pdo \
    && docker-php-ext-enable opcache \
    && docker-php-ext-install zip \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install json \
    && docker-php-ext-install xml \
    && docker-php-ext-install tidy \
    && docker-php-ext-install curl \
    && docker-php-ext-install fileinfo \
    && docker-php-ext-install mysqli  \
	&& docker-php-ext-install -j$(nproc) gd \
    && apt-get autoclean -y \
	&& rm -rf /var/lib/apt/lists/* \
	&& rm -rf /tmp/pear/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
COPY --chown=www-data:www-data . /var/www/html
COPY .docker/nginx /etc/nginx
COPY .docker/run.sh /run.sh
RUN chmod 755 /run.sh \
    && rm -rf /var/www/html/.docker
USER www-data
WORKDIR /var/www/html
RUN composer install --working-dir="/var/www/html" --optimize-autoloader --no-dev --no-interaction --no-progress --no-suggest --no-scripts && \
    composer dump-autoload --working-dir="/var/www/html"
USER root
EXPOSE 80
CMD [ "/run.sh" ]