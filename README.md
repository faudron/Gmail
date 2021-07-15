# Gmail Extractor
Desarrollo con PHP/MySQL (Framework Laravel), en una arquitectura de microservicios, planteado a través de servicios contenidos con Docker. 
El sistema accede a través de IMAP a una cuenta de gmail determinada, para extraer los mails que contengan la frase "xxxx" en el asunto o cuerpo del mensaje. Finalmente los mails filtrados son almacenados en base de datos y mostrados en un listado.

Consideraciones y requisitos
----------------------------
Se utiliza el acceso IMAP para obtener el listado de mails. Para ello es necesario que la cuenta de gmail a consultar tenga habilitado dicho servicio. Puede realizarlo de la siguiente manera:
- En la app de Gmail, dirigirse a "Configuración", pestaña de "Reenvío y correo POP/IMAP", luego seleccionar la opcion de "Habilitar IMAP" y finalmente guardar cambios.
- Debido a la seguridad que implementan en Google, hay que habilitar “Less Secure Apps” en la cuenta de Google. Acceder a "Google Account Security Settings" en [https://myaccount.google.com/security](https://myaccount.google.com/security), dirigirse a  “Less Secure Apps” y seleccionar “Turn on access” para habilitarlo.
Deberá tener instalado docker y docker-compose.

Puesta en marcha
----------------
La arquitectura elegida corre bajo microservicios mediante Docker. Se platea un esquema de 3 microservicios:
- MYSQL 5.7 para la base de datos donde se almacenan los mails que coinciden.
- NGINX escuchando el puerto 8000 para servir como servidor web.
- APP con PHP 7.4 FPM, con Laravel y vista mediante Blade.

Configuración
-------------
Descargar proyecto "Gmail Extractor" de GITHUB [https://github.com/faudron/Gmail.git](https://github.com/faudron/Gmail.git)
    
    git clone https://github.com/faudron/Gmail.git 

Ingresar a la carpeta del proyecto

    cd ./Gmail 

Generar archivo env, realizando una copia del example ya que el .env se encuentra ignorado 

    cp ./.env.example .env 
    
Editar el archivo .env configurando CLIENT_MAIL Y CLIENT_PASS con cuenta de gmail y su respectiva contraseña.

Iniciar y encender microservicios:

    docker-compose build app
    docker-compose up -d

Comprobar que los servicios están encendidos:

    docker-compose ps 

Instalar dependencias para proyecto php:

    docker-compose exec app composer install 


Prueba
------
Ingresar desde el navegador a [http://127.0.0.1:8000](http://127.0.0.1:8000) donde se sirve la APP.
