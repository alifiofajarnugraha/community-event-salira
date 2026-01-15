FROM php:8.2-fpm-alpine AS base

RUN apk add --no-cache \
    icu-dev \
    libzip-dev \
    oniguruma-dev \
    zlib-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    tzdata \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    intl \
    zip \
    gd \
    opcache

FROM base AS vendor

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

FROM node:20-alpine AS nodebuild
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY resources/ resources/
COPY public/ public/
COPY vite.config.js ./
RUN npm run build

FROM base AS app
WORKDIR /var/www/html

COPY --from=vendor /var/www/html/vendor /var/www/html/vendor
COPY --from=nodebuild /app/public/build /var/www/html/public/build
COPY . .

COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh \
  && chown -R www-data:www-data storage bootstrap/cache public

USER www-data
ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]

FROM nginx:1.27-alpine AS web
WORKDIR /var/www/html

COPY --from=nodebuild /app/public/build /var/www/html/public/build
COPY . .
COPY docker/nginx.conf /etc/nginx/conf.d/default.conf
RUN ln -s /var/www/html/storage/app/public /var/www/html/public/storage
