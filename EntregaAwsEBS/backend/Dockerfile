FROM ubuntu:24.04
ARG DEBIAN_FRONTEND=noninteractive
RUN  apt update --fix-missing -y && apt upgrade -y

# -- EDITAR POR EL USUARIO --
ENV CORS_ALLOW_ORIGIN='^https?://(midominio-ebs-frontend|localhost|127\.0\.0\.1)(:[0-9]+)?$'
ENV DATABASE_URL=mysql://username:password@dbHost:3306/databaseName?serverVersion=10.11.2-MariaDB&charset=utf8mb4

# Dejar sistema preparado para continuar
RUN apt install -y apt-utils git rsync nano vim unzip curl wget software-properties-common git
RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php

# Instalar Software
RUN apt-get install -y apache2 php8.3 php8.3-common php8.3-cli php8.3-gd php8.3-mysql php8.3-mbstring php8.3-bcmath php8.3-xml php8.3-fpm php8.3-curl php8.3-zip libapache2-mod-php8.3 zip unzip

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
RUN rm /var/www/html/*

# Subo archivos BACKEND
COPY wwwdata/. /var/www/html
RUN chown www-data:www-data -R /var/www/html/*

# Activar opciones de apache y reiniciar servicio
RUN a2enmod rewrite headers
RUN service apache2 restart
WORKDIR /var/www/html/