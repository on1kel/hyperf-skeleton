FROM phpswoole/swoole:php8.4

##
# ---------- env settings ----------
##
# --build-arg timezone=Europe/Moscow
ARG timezone

ENV TIMEZONE=${timezone:-"Europe/Moscow"}

RUN apt-get update && apt-get install -y \
    tar \
    wget \
    gzip \
    git \
    openssh-server

RUN set -ex \
    && docker-php-ext-install pcntl \
    && docker-php-ext-enable pcntl

RUN set -ex \
    && apt-get update \
    && apt-get install -y --no-install-recommends \
       libpq-dev postgresql-client \
       libpng-dev libjpeg62-turbo-dev libfreetype6-dev libwebp-dev libzip-dev unzip zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j"$(nproc)" pdo_pgsql pgsql exif gd zip \
    && docker-php-ext-enable pdo_pgsql pgsql exif gd zip \
    && rm -rf /var/lib/apt/lists/*

EXPOSE 9501
