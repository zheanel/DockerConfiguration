
# Configuracion Moodle con Docker

1. Descagamos el repositorio en nuestro equipo, puede ser descargando el ZIP desde Code > Download ZIP o usando el comando git clone https://github.com/zheanel/DockerConfiguration.git

2. Accedemos a la carpeta DockerConfiguration/Moodle
3. Antes de ejecutar el contenedor, deberemos de revisar la ruta dentro de docker-compose.yml.

## Rutas a modificar
En linux, deberemos de reemplazar las siguientes rutas:
- C:/Moodle/Moodle_db por /root/Moodle/Moodle_db
- C:/Moodle/Moodle_data por /root/Moodle/Moodle_data

Si usamos windows, no deberemos de modificar nada del archivo

4. En el archivo .env, podemos modificar las credenciales del servidor MySQL. Para pruebas, podemos dejarlo por defecto
4. Ejecutamos docker-compose build --no-cache .
5. Ejecutamos docker-compose up -d
6. Por defecto, podemos acceder a Moodle desde http://localhost:84

## Instalacion Moodle
1. Seleccionamos nuestro idioma
![Setup 1](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup1.png)
2. Dejamos los valores tal y como estan, no modificar el directorio!
![Setup 2](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup2.png)
3. Seleccionamos como base de datos: MySQL mejorado
![Setup 3](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup3.png)
4. Si no hemos modificado los datos en el .env, lo configuramos tal y como se ve en la imagen. El servidor debe ser siempre mysql
![Setup 4](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup4.png)
5. Aceptamos los terminos para continuar
![Setup 5](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup5.png)
6. Bajamos hasta el final de la pagina y damos clic en Continuar, ignoramos la comprobacion de site not https, ya que no esta preparado para eso
![Setup 6](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup6.png)
7. En la siguiente ventana (Instalacion), puede parecer que no esta haciendo nada, pero tardara un poco. Cuando termine, bajamos hasta el final de la pagina y damos clic en el boton
![Setup 7](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup7.png)
8. Ahora rellenamos los datos que nos pide a nuestro gusto
![Setup 8](https://github.com/zheanel/DockerConfiguration/blob/main/Moodle/screenshots/setup8.png)


