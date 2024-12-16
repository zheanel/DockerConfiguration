FROM ubuntu:24.04
ARG DEBIAN_FRONTEND=noninteractive
RUN  apt update -y && apt upgrade -y

# Dejar sistema preparado para continuar
RUN apt install -y apt-utils git rsync nano vim unzip curl wget software-properties-common git

# Instalar Software
RUN apt-get install -y apache2 zip unzip

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
RUN mkdir /var/www/webEstatica/
RUN rm /etc/apache2/sites-enabled/000-default.conf

# Descargar y descomprimir archivos web
COPY webEstatica.zip /var/www/webEstatica/
RUN cd /var/www/webEstatica/ && unzip webEstatica.zip
RUN rm /var/www/webEstatica/webEstatica.zip
RUN chown www-data:www-data -R /var/www/webEstatica
COPY webEstatica.conf /etc/apache2/sites-enabled/webEstatica.conf

# Activar opciones de apache y reiniciar servicio
RUN a2enmod rewrite headers
RUN service apache2 restart
WORKDIR /var/www/webEstatica/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]