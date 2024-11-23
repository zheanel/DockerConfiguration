# Configuracion Web Dinamica con Docker

1. Descagamos el repositorio en nuestro equipo, puede ser descargando el ZIP desde Code > Download ZIP o usando el comando git clone https://github.com/zheanel/DockerConfiguration.git

2. Accedemos a la carpeta DockerConfiguration/WebDinamica

3. Ejecutamos docker-compose build --no-cache .
4. Ejecutamos docker-compose up -d
5. Por defecto, podemos acceder a la web desde http://localhost:85

## Agregar Proyectos
1. Accedemos a http://localhost:85/addProject.php
![Setup 1](https://github.com/zheanel/DockerConfiguration/blob/main/WebDinamica/screenshots/setup1.png)
2. Rellenamos los campos solicitados y damos clic en Agregar Proyecto
![Setup 2](https://github.com/zheanel/DockerConfiguration/blob/main/WebDinamica/screenshots/setup2.png)
