# Configuracion Mediawiki con Docker

1. Descagamos el repositorio en nuestro equipo, puede ser descargando el ZIP desde Code > Download ZIP o usando el comando git clone https://github.com/zheanel/DockerConfiguration.git

2. Accedemos a la carpeta DockerConfiguration/Wordpress
3. [SOLO LINUX] Cambiamos la ruta del docker-compose.yml C:/mediawiki/mw_db:/var/lib/mysql a /root/mediawiki/mw_db:/var/lib/mysql y C:/mediawikiDocker/mw_data/:/var/www/html a /root/mediawikiDocker/mw_data:/var/www/html
4. Ejecutamos docker-compose build --no-cache .
5. Ejecutamos docker-compose up -d

## Pasos a seguir
1. Accedemos a http://localhost:89 y damos clic en Continuar despues de seleccionar nuestro idioma
![Setup 1](https://github.com/zheanel/DockerConfiguration/blob/main/Mediawiki/screenshots/setup1.png)
2. Aceptamos los terminos
![Setup 2](https://github.com/zheanel/DockerConfiguration/blob/main/Mediawiki/screenshots/setup2.png)
3. Rellenamos los datos de la base de datos, que estan definidos en el archivo .env
![Setup 3](https://github.com/zheanel/DockerConfiguration/blob/main/Mediawiki/screenshots/setup3.png)
4. Marcamos la casilla y damos clic en continuar
![Setup 4](https://github.com/zheanel/DockerConfiguration/blob/main/Mediawiki/screenshots/setup4.png)
5. Rellenamos los datos de nuestra cuenta de usuario
6. Se nos descargara un archivo de configuracion, este lo tendremos que mover al contenedor de docker
![Setup 5](https://github.com/zheanel/DockerConfiguration/blob/main/Mediawiki/screenshots/setup5.png)
7. Vamos a la carpeta donde tenemos el archivo descargado y ejecutamos el comando: docker cp LocalSettings.php mediawiki_www:/var/www/html
![Setup 6](https://github.com/zheanel/DockerConfiguration/blob/main/Mediawiki/screenshots/setup6.png)
8. Volvemos a acceder a http://localhost:89 y veremos que podemos acceder sin problema a nuestro wiki

## Acceder a la base de datos
1. Descargamos HeidiSQL desde https://www.heidisql.com/downloads/releases/HeidiSQL_12.8_64_Portable.zip
2. Abrimos el ejecutable y damos clic en Nueva
3. Cambiamos el puerto por 3310
4. Usamos la contraseña que aparece en .env

## Parar y Activar contenedor (debemos de estar dentro de la carpeta)
1. Para pararlo, usamos el comando: docker compose down
2. Para activarlo, usamos el comando: docker compose up -d