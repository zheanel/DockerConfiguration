FROM ubuntu:24.04
ARG DEBIAN_FRONTEND=noninteractive
RUN  apt update -y && apt upgrade -y

# Dejar sistema preparado para continuar
RUN apt install -y apt-utils git rsync nano vim unzip curl wget software-properties-common git mariadb-client
RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php

# Instalar Software
RUN apt-get install -y apache2 php8.3 php8.3-common php8.3-cli php8.3-gd php8.3-mysql php8.3-mbstring php8.3-bcmath php8.3-xml php8.3-fpm php8.3-curl php8.3-zip mariadb-server libapache2-mod-php8.3 zip unzip

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
RUN mkdir /var/www/webDinamica/
RUN rm /etc/apache2/sites-enabled/000-default.conf

# Descargar y descomprimir archivos web
COPY webData/. /var/www/webDinamica/
RUN chown www-data:www-data -R /var/www/webDinamica
COPY webDinamica.conf /etc/apache2/sites-enabled/webDinamica.conf

# Activar opciones de apache y reiniciar servicio
RUN a2enmod rewrite headers
RUN service apache2 restart
WORKDIR /var/www/webDinamica/

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]