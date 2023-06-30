# Establece la imagen base de PHP
FROM php:8.1.6-apache

# Copia los archivos de tu proyecto Laravel al contenedor
COPY . /var/www/html

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

# Instalar las dependencias de Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Habilitar módulo rewrite de Apache
RUN a2enmod rewrite

# Expone el puerto 80 para acceder al servidor Apache
EXPOSE 9000

# Inicia el servidor Apache
CMD ["apache2-foreground"]