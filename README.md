# TaskReservation Api

Api para reservar tareas.

## Sobre el líder del proyecto

https://valentigamez.com

## Instalación

Este proyecto está hecho con Laravel 6.2 por lo que es necesario seguir sus requerimientos para hacerlo funcionar:

https://laravel.com/docs/6.x#server-requirements

Antes de instalar el proyecto es recomendable seguir las siguientes instucciones:

* Modificar parámetros del repositorio en el composer.json
```
"name": "vgrdominik/taskReservationApi",
"description": "Api del gestor para reservar tareas.",
"keywords": [
    "task",
    "reservation",
    "vgrdominik",
    "valentigamez"
],
```
* Crear el fichero .env del proyecto. Todas las variables {MY_(.*)} deben ser substituidas por vuestros valores. Si algunos valores no se sabe cómo ponerlos, en https://laravel.com/docs/6.x#server-requirements se puede encontrar como crear un proyecto desde 0 y allí hay datos de ejemplo.  
```
APP_NAME={MY_NAME}
APP_ENV=local
APP_KEY={MY_APP_KEY}
APP_DEBUG=true
APP_URL={MY_APP_URL}

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST={MY_DB_HOST}
DB_PORT={MY_DB_PORT}
DB_DATABASE={MY_DB_DATABASE}
DB_USERNAME={MY_DB_USERNAME}
DB_PASSWORD={MY_DB_PASSWORD}

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST={MY_MAIL_HOST}
MAIL_PORT={MY_MAIL_PORT}
MAIL_USERNAME={MY_MAIL_USERNAME}
MAIL_PASSWORD={MY_MAIL_PASSWORD}
MAIL_ENCRYPTION={MY_MAIL_ENCRYPTION}
MAIL_FROM_ADDRESS={MY_MAIL_FROM_ADDRESS}
MAIL_FROM_NAME={MY_MAIL_FROM_NAME}

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

JWT_SECRET={MY_JWT_SECRET}

SPA_WEBSITE="http://localhost:3000"

```

Instalación:

```
composer install
php artisan migrate
php artisan config:cache
```

## Aprendiendo sobre Task Reservation

Este proyecto implementa Airlock de Laravel para la autenticación de los usuarios mediante la api. No hace falta hacer ninguna instalación adicional. Se puede encontrar más información en https://laravel.com/docs/master/airlock.

Se puede encontrar toda la documentación en el siguiente enlace: https://github.com/vgrdominik/taskReservationDocumentation

## Patrocinadores de Valentí Gàmez

<p align="center"><img src="https://www.ciclotic.com/images/logo.png?1" width="200"></p>

## Contribución

Se puede realizar un pull request si se desea contribuir en el proyecto. Aún no hay código de conducta ya que se considera contraproducente en este proyecto.

Se puede disponer del código y comentar en iam@valentigamez.com. Lo que consideres serà muy agradecido.

## Vulnerabilidades de seguridad

Si se descubre algún fallo de seguridad se puede enviar a iam@valintigamez.com con el asunto "Vulnerabilidad taskReservationApi". Valentí Gàmez, el líder del proyecto se compromete a responder y tratar cualquier situación constructiva.

## Licencia

TaskReservationApi es un software open source bajo la licencia [MIT license](https://opensource.org/licenses/MIT).

NOTA: No existe versión enterprise. 
