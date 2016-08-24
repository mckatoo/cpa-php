FROM ubuntu:14.04
MAINTAINER mckatoo@gmail.com
EXPOSE 80
RUN apt-get update
RUN apt-get install -y git mysql-client \
    nginx \
    php5-fpm \
    php5-mcrypt \
    curl \
    php5-cli \
    vim \
    && \
    mkdir /var/www/web -p \
    && \
    cd /var/www/web \
    && \
    bash -c "echo 'cgi.fix_pathinfo=0' >> /etc/php5/fpm/php.ini" \
    && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && \
    php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && \
    php composer-setup.php \
    && \
    php -r "unlink('composer-setup.php');" \
    && \
    mv composer.phar /usr/local/bin/composer
RUN composer create-project laravel/laravel --prefer-dist /var/www/web/public
