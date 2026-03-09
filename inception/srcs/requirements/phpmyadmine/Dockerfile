FROM debian:bullseye

EXPOSE 80

RUN apt update -y && apt install -y \
    php7.4 \
    php7.4-fpm \
    php7.4-mysql \
    wget \
    && wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.tar.gz -P /var/www \
    && cd /var/www && tar -xzf phpMyAdmin-5.2.1-all-languages.tar.gz \
    && mv phpMyAdmin-5.2.1-all-languages phpmyadmin \
    && rm phpMyAdmin-5.2.1-all-languages.tar.gz \
    && mkdir -p /run/php

COPY conf/config.inc.php /var/www/phpmyadmin/config.inc.php

RUN sed -i 's#listen = /run/php/php7.4-fpm.sock#listen = 0.0.0.0:9000#g' /etc/php/7.4/fpm/pool.d/www.conf \
    && sed -i 's#chdir = /var/www#chdir = /var/www/phpmyadmin#g' /etc/php/7.4/fpm/pool.d/www.conf

WORKDIR /var/www/phpmyadmin

CMD ["php-fpm7.4", "-F"]
