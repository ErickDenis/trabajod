FROM php:8.1.6-apache

# Copia los archivos de tu aplicación al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias de Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip

# Configura el archivo de host virtual de Apache
COPY . /var/www/html

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Expone el puerto 8000
EXPOSE 9000

# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]
## Establece la imagen base de PHP
#FROM php:8.1.6-apache

# Copia los archivos del proyecto al directorio de trabajo del contenedor
#COPY . /var/www/html

# Configura el directorio de trabajo
#WORKDIR /var/www/html
# Instalar las dependencias de Laravel
#RUN apt-get update && apt-get install -y \
#    libzip-dev \
#    zip \
#    && docker-php-ext-install zip
# Cambiar los permisos del directorio /var/www/html dentro del contenedor
#RUN chmod -R 755 /var/www/html
# Reiniciar el servicio de Apache
#RUN service apache2 restart
# Habilitar módulo rewrite de Apache
#RUN a2enmod rewrite
# Expone el puerto 80 para acceder al servidor Apache
#EXPOSE 80
# Inicia el servidor Apache
#CMD ["apache2-foreground"]






# Instala las dependencias de PHP necesarias para Laravel
#RUN apt-get update && apt-get install -y \
#    git \
#    curl \
#    libzip-dev \
#    libpng-dev \
#    libonig-dev \
#    libxml2-dev \
#    zip \
#    unzip \
#    && docker-php-ext-install zip
