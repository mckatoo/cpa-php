# imagem base
FROM php:5.6-apache
 
RUN apt-get update
#RUN apt-get install -y g++ 
 
# habilitando os módulos 'header' e 'rewrite'
RUN ln -s /etc/apache2/mods-available/headers.load /etc/apache2/mods-enabled
RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
 
# instalando a extensão 'mbstring'
RUN docker-php-ext-install mbstring
 
# instalando as extensões 'gd'
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y libgd-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr
RUN docker-php-ext-install gd exif
 
# instalando as extensões do 'mysql'
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql 
 
# habilitando o módulo 'rewrite'
RUN a2enmod rewrite

# instalando composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
