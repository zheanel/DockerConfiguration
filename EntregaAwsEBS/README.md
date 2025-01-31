
# Manual de Implementacion

En este manual, se mostraran todos los requisitos y pasos necesarios para implementar correctamente la aplicacion de reservas de habitaciones

## Requesitos necesarios
1. Una cuenta de Amazon AWS que tenga acceso a los servicios (RDS, Elastic BeanStalk y EC2)
2. Gestor de bases de datos (HeidiSQL o similar)

## Arquitectura Final
![Diagrama_AWS_EBS_RDS](https://raw.githubusercontent.com/zheanel/DockerConfiguration/refs/heads/main/EntregaAwsEBS/Readme-data/estructura.png)

**Backend**: Contenedor que contiene el software basado en Symphony, esta aislado del exterior mediante una red virtual priviada (VPC) y se conecta a la base de datos MariaDB (RDS)

**Frontend**: Contiene la pagina web que se muestra a los clientes, los datos son obtenidos a traves del backend mediante una solicitud web interna

**VPC Amazon AWS**: Red interna generada para la comunicacion segura de los elementos

**RDS**: Base de datos basada en MariaDB, usada por el Backend

## Software Instalado

El software que va instalado en los contenedores es el siguiente:
* Apache2
* PHP 8.3 + Extensiones
* Composer
* Utilidades esenciales de Ubuntu 24.04

## Pasos de Implementacion

### Base de datos (RDS)
1. Accedemos al servicio RDS desde la consola de AWS
2. Damos clic en Crear base de datos
3. Seleccionamos el modo estandar
4. Elegimos MariaDB o MySQL con capa gratuita
5. En el identificador, ponemos el nombre que nosotros deseemos
6. En el usuario, podemos dejarlo por defecto (admin) o elegimos uno
7. Establecemos una contraseña
8. Permitimos el acceso publico para poder importar el archivo installMe.sql
9. Ignoramos el resto de opciones y damos clic en "Crear base de datos"

### Preparacion backend
1. Modificamos el archivo Dockerfile y editamos la siguiente linea:
```ENV DATABASE_URL=mysql://username:password@dbHost:3306/databaseName?serverVersion=10.6.18-MariaDB&charset=utf8mb4```

2. Reemplazamos los siguientes valores:
* username: Usuario creado en RDS (admin, por defecto)
* password: Contraseña establecida en RDS
* dhHost: Direccion DNS asignada en AWS (automatico)
* databaseName: Nombre de la base de datos a usar

#### Base de datos
1. Descargamos HeidiSQL
2. Nos conectamos al servidor generado en RDS
![Diagrama_HeidiSQL_Conectar](https://raw.githubusercontent.com/zheanel/DockerConfiguration/refs/heads/main/EntregaAwsEBS/Readme-data/heidi-gui.png)
3. Creamos una base de datos, debe tener el mismo nombre que la definida previamente en el Dockerfile
4. Entramos en la base de datos y ejecutamos el archivo installMe.sql (Archivo > Ejecutar archivo SQL...) Si nos pregunta "detectar autocodificacion", damos clic en si.
![Diagrama_HeidiSQL_RunSQL](https://raw.githubusercontent.com/zheanel/DockerConfiguration/refs/heads/main/EntregaAwsEBS/Readme-data/runsql.png)

### Desplegar entorno en Elastic BeanStalk
1. Accedemos al servicio Elastic Beanstalk desde la consola de AWS
2. Damos clic en "Crear Aplicacion"
3. Seleccionamos Entor de servidor web y le damos un nombre a la aplicacion y entorno
4. Elegimos un nombre de dominio, tendra que estar disponible
5. Seleccionamos Plataforma Docker y Docker running on 64bit Amazong Linux 2023
6. En nuestra carpeta backend, creamos un zip de todo el contenido excepto el docker-compose.yml
7. Damos clic en Cargar el codigo, establecemos un nombre de version que deseemos y subimos el zip que hemos generado
8. Seleccionamos los roles que deseemos
9. Elegimos una VPC y una de las subredes disponibles (importante acordarse de cual hemos seleccionado)
10. Dejamos el escalado por defecto
11. El informe de estado lo dejamos en basico y desactivamos las actualizaciones administradas
12. Damos clic en Enviar


### Preparacion frontend
1. Modificamos el archivo Dockerfile y editamos la siguiente linea:
```RUN sed -i 's/<backend_domain>/backend_domain_here/g' /var/www/html/main-ZKT6JCA3.js```

2. Reemplazamos el valor backend_domain_here por el nombre del dominio generado por amazon en el backend


### Desplegar entorno en Elastic BeanStalk
1. Accedemos al servicio Elastic Beanstalk desde la consola de AWS
2. Damos clic en "Crear Aplicacion"
3. Seleccionamos Entor de servidor web y le damos un nombre a la aplicacion y entorno
4. Elegimos un nombre de dominio, tendra que estar disponible
5. Seleccionamos Plataforma Docker y Docker running on 64bit Amazong Linux 2023
6. En nuestra carpeta frontend, creamos un zip de todo el contenido excepto el docker-compose.yml
7. Damos clic en Cargar el codigo, establecemos un nombre de version que deseemos y subimos el zip que hemos generado
8. Seleccionamos los roles que deseemos
9. Elegimos la misma VPC y subred que hemos usado en el backend
10. Activamos la direccion IP publica para poder acceder a la pagina
11. Dejamos el escalado por defecto
12. El informe de estado lo dejamos en basico y desactivamos las actualizaciones administradas
13. Damos clic en Enviar

## ¡Recomendacion!
Desactivar el acceso publico en la base de datos RDS para evitar ataques sobre la misma.
