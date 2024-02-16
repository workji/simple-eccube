FROM php:8.1-apache

# PHP 設定ファイル
# COPY php.ini /etc/php.ini
COPY php.ini /usr/local/etc/php/php.ini

# Composerのインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# ミドルウェアインストール
# https://hub.docker.com/_/php/
RUN apt-get update && apt-get install -y \
        apt-transport-https \
        apt-utils \
        build-essential \
        curl \
        debconf-utils \
        gcc \
        git \
        rsync \
        gnupg2 \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libonig-dev \
        libpng-dev \
        libpq-dev \
        libwebp-dev \
        libxml2-dev \
        libzip-dev \
        locales \
        msmtp \
        msmtp-mta \
        ssl-cert \
        unzip \
        vim \
        wget \
        zip \
        zlib1g-dev \
        && apt clean \
        && rm -rf /var/lib/apt/lists/* \
        && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
        && docker-php-ext-install -j$(nproc) zip gd mysqli pdo_mysql opcache intl pgsql pdo_pgsql \
        && echo "en_US.UTF-8 UTF-8" >/etc/locale.gen \
        && locale-gen

# Install and enable imagick PECL extensions
# RUN pecl install imagick \
#   && docker-php-ext-enable imagick

# APC
RUN pecl install apcu && echo "extension=apcu.so" > /usr/local/etc/php/conf.d/apc.ini

# Node.js 12.x
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - \
    && apt update \
    && apt install -y nodejs \
    && apt clean

# xdebug
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug

# modRewriteを有効化する
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

# HTTPS 有効化
RUN a2enmod headers
RUN a2enmod ssl
RUN ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf
EXPOSE 443

# タイムゾーン設定
RUN ln -sf  /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

CMD ["apache2-foreground"]