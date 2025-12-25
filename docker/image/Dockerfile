ARG PHP_VERSION=php8.4
FROM phpswoole/swoole:${PHP_VERSION} AS base

ARG TIMEZONE=Europe/Amsterdam
ENV TIMEZONE=${TIMEZONE}

WORKDIR /app

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        ca-certificates \
        tzdata \
        libpq5 postgresql-client \
        libpng16-16 libjpeg62-turbo libfreetype6 libwebp7 \
        libzip5 \
        librdkafka1 \
    ; \
    ln -snf /usr/share/zoneinfo/$TIMEZONE /etc/localtime; \
    echo $TIMEZONE > /etc/timezone; \
    rm -rf /var/lib/apt/lists/*

FROM base AS builder

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        git unzip zip \
        libpq-dev \
        libpng-dev libjpeg62-turbo-dev libfreetype6-dev libwebp-dev \
        libzip-dev \
        librdkafka-dev \
        $PHPIZE_DEPS \
    ; \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp; \
    docker-php-ext-install -j"$(nproc)" \
        exif pcntl bcmath pdo_pgsql pgsql zip gd \
    ; \
    pecl install rdkafka redis; \
    docker-php-ext-enable rdkafka redis opcache; \
    rm -rf /var/lib/apt/lists/* /tmp/pear

# Установка vendor (composer)
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts

# Финальная стадия
FROM base

# Копируем установленные extensions из builder (включая redis и rdkafka)
COPY --from=builder /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/
COPY --from=builder /usr/local/etc/php/conf.d/ /usr/local/etc/php/conf.d/

# Копируем кастомные ini
COPY ./docker/conf.d/*.ini /usr/local/etc/php/conf.d/

# Копируем код приложения
COPY . /app

# Копируем vendor из builder
COPY --from=builder /app/vendor /app/vendor