# Configuracion Web Dinamica con Docker

1. Descagamos el repositorio en nuestro equipo, puede ser descargando el ZIP desde Code > Download ZIP o usando el comando git clone https://github.com/zheanel/DockerConfiguration.git

2. Accedemos a la carpeta DockerConfiguration/WebDinamica
3. [SOLO LINUX] Cambiamos la ruta del docker-compose.yml C:/bbdd/WebDinamica_db:/var/lib/mysql a /root/bbdd/WebDinamica_db:/var/lib/mysql
4. Ejecutamos docker-compose build --no-cache .
5. Ejecutamos docker-compose up -d
6. Por defecto, podemos acceder a la web desde http://localhost:85

## Agregar Proyectos
1. Accedemos a http://localhost:85/addProject.php
![Setup 1](https://github.com/zheanel/DockerConfiguration/blob/main/WebDinamica/screenshots/setup1.png)
2. Rellenamos los campos solicitados y damos clic en Agregar Proyecto
![Setup 2](https://github.com/zheanel/DockerConfiguration/blob/main/WebDinamica/screenshots/setup2.png)

## Acceder a la base de datos
1. Descargamos HeidiSQL desde https://www.heidisql.com/downloads/releases/HeidiSQL_12.8_64_Portable.zip
2. Abrimos el ejecutable y damos clic en Nueva
3. Cambiamos el puerto por 3309
4. Usamos la contraseña que aparece en docker-compose.yml

## Parar y Activar contenedor (debemos de estar dentro de la carpeta)
1. Para pararlo, usamos el comando: docker compose down
2. Para activarlo, usamos el comando: docker compose up -d