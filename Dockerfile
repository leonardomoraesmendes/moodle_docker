FROM debian:9
COPY sources.list /etc/apt/sources.list
RUN apt update && apt install apache2 php libapache2-mod-php php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip php-cli php-redis -y

COPY moodle /var/www/html/moodle
COPY ead.conf /etc/apache2/sites-available/ead.conf

RUN 	chown -R www-data:www-data /var/www/ ;\
	find /var/www/html/moodle/ -type d -exec chmod 750 {} \; ;\
	find /var/www/html/moodle/ -type f -exec chmod 640 {} \; ;\
	a2enmod rewrite ;\
	a2dissite 000-default ;\
	a2ensite ead 

EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]
