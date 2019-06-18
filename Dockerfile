FROM alpine
RUN apk update && apk add --no-cache \
    apache2 \
    php7 \
    php7-apache2 \
    mysql-client \
    php7-iconv \
    php7-curl \
    php7-zip \
    php7-mysqli \
    && sed -i 's/#ServerName www.example.com:80/ServerName ead.example.com:80/' /etc/apache2/httpd.conf
#    && sed -i 's/mod_mpm_prefork.so\/mod_mpm_prefork.so/#mod_mpm_prefork.so\/mod_mpm_prefork.so/' /etc/apache2/httpd.conf
#    && sed -i 's/#LoadModule mpm_event_module modules\/mod_mpm_event.so/LoadModule mpm_event_module modules\/mod_mpm_event.so/' /etc/apache2/httpd.conf

COPY --chown=apache:apache moodle/ /var/www/moodle
COPY --chown=apache:apache moodledata/ /var/www/moodledata
COPY moodle.conf /etc/apache2/conf.d/
CMD ["httpd"]
