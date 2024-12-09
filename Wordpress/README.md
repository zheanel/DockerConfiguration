# Configuracion Wordpress con Docker

1. Descagamos el repositorio en nuestro equipo, puede ser descargando el ZIP desde Code > Download ZIP o usando el comando git clone https://github.com/zheanel/DockerConfiguration.git

2. Accedemos a la carpeta DockerConfiguration/Wordpress
3. [SOLO LINUX] Cambiamos la ruta del docker-compose.yml C:/wordpressDocker/Wordpress_db:/var/lib/mysql a /root/wordpressDocker/Wordpress_db:/var/lib/mysql y C:/wordpressDocker/Wordpress_data:/var/www/html a /root/wordpressDocker/Wordpress_data:/var/www/html
4. Ejecutamos docker-compose build --no-cache .
5. Ejecutamos docker-compose up -d
6. Por defecto, podemos acceder a la web desde http://localhost:81
7. Seguimos el asistente de instalacion, no nos pedira la configuracion de la base de datos ya que previamente se ha definido

## Acceder a la base de datos
1. Descargamos HeidiSQL desde https://www.heidisql.com/downloads/releases/HeidiSQL_12.8_64_Portable.zip
2. Abrimos el ejecutable y damos clic en Nueva
3. Cambiamos el puerto por 3307
4. Usamos la contraseña que aparece en .env

## Parar y Activar contenedor (debemos de estar dentro de la carpeta)
1. Para pararlo, usamos el comando: docker compose down
2. Para activarlo, usamos el comando: docker compose up -d