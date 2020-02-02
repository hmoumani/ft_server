FROM debian:buster

RUN apt update
RUN apt -y install nginx wget lsb-release gnupg php7.3-fpm php-mysql php-mbstring vim
COPY srcs/default /etc/nginx/sites-available/
COPY ./srcs/ssl/* /etc/nginx/
COPY srcs/run.sh /
COPY srcs/admin.sql /
RUN apt update
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.3/phpMyAdmin-4.9.3-all-languages.tar.gz
RUN tar -xvzf phpMyAdmin-4.9.3-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.3-all-languages phpmyadmin
RUN mv phpmyadmin /var/www/html/
RUN rm phpMyAdmin-4.9.3-all-languages.tar.gz
RUN mkdir /var/www/html/phpmyadmin/tmp
RUN chmod 777 /var/www/html/phpmyadmin/tmp
RUN rm -rf /var/www/html/phpmyadmin/config.sample.inc.php
COPY srcs/config.inc.php /var/www/html/phpmyadmin/
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN rm latest.tar.gz
COPY srcs/wp-config.php /wordpress
RUN mv wordpress /var/www/html/

CMD ["bash", "run.sh"]