FROM phpswoole/swoole:php8.4

ARG timezone
ENV TIMEZONE=${timezone:-"Europe/Moscow"}

# Базовые пакеты + build deps для PECL
RUN set -eux; \
    apt-get update; \
    apt-get install -y \
      tar wget gzip git openssh-server \
      libpq-dev postgresql-client \
      libpng-dev libjpeg62-turbo-dev libfreetype6-dev libwebp-dev \
      libzip-dev unzip zip librdkafka-dev\
      $PHPIZE_DEPS; \
    docker-php-ext-install pcntl bcmath; \
    docker-php-ext-enable pcntl bcmath; \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp; \
    docker-php-ext-install -j"$(nproc)" pdo_pgsql pgsql exif gd zip; \
    docker-php-ext-enable pdo_pgsql pgsql exif gd zip

# Xdebug через PECL (нужны $PHPIZE_DEPS)
RUN set -eux; \
    pecl install -o -f xdebug; \
    pecl install -o -f rdkafka-6.0.3; \
    docker-php-ext-enable xdebug rdkafka

# Только настройки Xdebug, без zend_extension
RUN set -eux; \
    { \
      echo "xdebug.mode=\${XDEBUG_MODE:-off}"; \
      echo "xdebug.start_with_request=yes"; \
      echo "xdebug.client_port=9003"; \
      echo "xdebug.client_host=host.docker.internal"; \
      echo "xdebug.discover_client_host=0"; \
      echo "xdebug.log_level=0"; \
      echo "xdebug.max_nesting_level=512"; \
    } > /usr/local/etc/php/conf.d/99-xdebug.ini

# Опционально: отключить opcache в CLI
RUN echo "opcache.enable_cli=0" > /usr/local/etc/php/conf.d/10-opcache-cli.ini

# Чистка после сборки, теперь можно снести build-deps
RUN set -eux; \
    apt-get purge -y --auto-remove $PHPIZE_DEPS; \
    rm -rf /var/lib/apt/lists/* /tmp/pear

EXPOSE 9501 9003
