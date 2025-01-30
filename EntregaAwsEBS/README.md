
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

1. Crearemos una nueva base de datos en RDS, deberemos de establecer un usuario y contraseña. Permitiremos el acceso publico para poder instalar la base de datos, luego se lo quitamos por seguridad

2. Modificaremos el archivo Dockerfile del backend, en la linea que dice ENV DATABASE_URL=

Lo que debemos de modificar es:
- username= Usuario establecido a la hora de crear el RDS
- password= Contraseña establecida a la hora de crear el RDS
- dhHost= Direccion DNS que amazon ha asignado al RDS
- databaseName= Nombre que deseemos

3. Accederemos a la base de datos a traves de HeidiSQL, introduciendo las mismas credenciales y datos que hemos introducido previamente (no tocar el nombre de la base de datos). Una vez dentro, crearemos una base de datos que hemos definido previamente, accedemos a ella y ejecutaremos el sql llamado installMe.sql

4. Crearemos un nuevo entorno de EBS para el backend, en este momento, asignaremos una nueva VPC, sin asignar una direccion IP publica. Comprimiremos todo el directorio backend (excluyendo docker-compose.yml) y subimos el archivo .zip a la hora de generar el EBS

5. Antes de subir el frontend, deberemos de modificar en el Dockerfile, donde dice 'backend_domain_here', pondremos el nombre de dns que hemos generado para el backend en EBS. Comprimiremos todo el directorio backend (excluyendo docker-compose.yml) y subimos el archivo .zip a la hora de generar el EBS

6. Creamos otro entorno para el frontend, seleccionaremos el mismo VPC que hemos usado previamente en el backend. Esta vez, asignaremos una direccion IP publica.
