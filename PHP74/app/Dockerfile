FROM php:7.4-apache

#Instalando o php e o apache
RUN apt-get update && docker-php-ext-install pdo_mysql
RUN apt install openssl -y
RUN apt-get -y update \
&& apt-get install -y libicu-dev \ 
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl \
&& docker-php-ext-install mysqli

#configurando o apache
RUN a2enmod rewrite
RUN a2enmod ssl && a2enmod socache_shmcb
RUN service apache2 restart

#Define o diretório de raiz do framework
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

ADD default-ssl.conf /etc/apache2/sites-enabled/
ADD default-ssl.conf /etc/apache2/sites-available/

COPY mycert.crt /etc/ssl/certs/
COPY mycert.key /etc/ssl/private/ 
#RUN a2ensite default-ssl.conf
#RUN a2enmod default-ssl
RUN sed -i '/SSLCertificateFile.*snakeoil\.pem/c\SSLCertificateFile \/etc\/ssl\/certs\/mycert.crt' /etc/apache2/sites-available/default-ssl.conf
RUN sed -i '/SSLCertificateKeyFile.*snakeoil\.key/cSSLCertificateKeyFile /etc/ssl/private/mycert.key\' /etc/apache2/sites-available/default-ssl.conf
RUN apt-get update && apt-get upgrade -y


RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

#Expondo as portas que preciso para rodar a aplicação
EXPOSE 80/tcp
EXPOSE 443/tcp