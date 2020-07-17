# https://hub.docker.com/_/debian/
FROM php:7.4-cli-alpine

ADD entrypoint.sh /usr/local/bin

RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
        && pecl install xdebug-2.9.4 &&  pecl install redis \
        && curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/composer \
        && chmod +x /usr/local/bin/composer \
        && apk update && apk add lighttpd php7-pdo_sqlite \
    php7-common php7-iconv php7-json php7-gd php7-curl \
    php7-xml php7-mysqli php7-imap php7-cgi fcgi \
    php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt \
    php7-gettext php7-ldap php7-ctype php7-dom php7-pcntl \
    && ln -s /usr/share/nginx/html/vendor/bin/ppm /usr/bin/ppm \
    && docker-php-ext-install pdo pdo_mysql pcntl \
    && docker-php-ext-enable xdebug redis pcntl

    ## TODO purge apk

WORKDIR /usr/share/nginx/html

ADD entrypoint.sh /usr/local/bin
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT  ["entrypoint.sh"]
