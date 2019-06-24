FROM alpine
RUN apk update && apk add --no-cache \
    apache2 \
    php7 \
    php7-apache2 \
    php7-session \
    php7-ctype \
    php7-json \
    php7-xml \
    php7-gd \
    php7-simplexml \
    php7-dom \
    php7-xmlreader \
    php7-intl \
    php7-fileinfo \
    php7-mbstring \
    php7-tokenizer \
    php7-iconv \
    php7-xmlrpc \
    php7-redis \
    php7-soap \
    php7-curl \
    php7-zip \
    php7-mysqli \
    && sed -i 's/#ServerName www.example.com:80/ServerName ead.example.com:80/' /etc/apache2/httpd.conf \
    && mkdir /var/cache/moodle \
    && chmod 777 /var/cache/moodle

COPY --chown=apache:apache moodle/ /var/www/moodle
#COPY --chown=apache:apache moodledata/ /var/www/moodledata
COPY php.ini /etc/php7/
COPY ead.conf /etc/apache2/conf.d/
CMD ["httpd", "-D", "FOREGROUND"]
