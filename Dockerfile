# Establece la imagen base de PHP
FROM php:8.1.6-apache

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia los archivos de tu proyecto Laravel al contenedor
COPY . /var/www/html

# Instala las dependencias de PHP necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install zip

# Instala Composer en el contenedor
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de tu proyecto Laravel utilizando Composer
RUN composer install --optimize-autoloader --no-dev

# Genera una clave de aplicación de Laravel
RUN php artisan key:generate

# Copiar la configuración de Apache
COPY .cloud/apache/site.conf /etc/apache2/sites-available/000-default.conf

# Habilitar módulo rewrite de Apache
RUN a2enmod rewrite

# Expone el puerto 80 para acceder al servidor Apache
EXPOSE 9000

# Inicia el servidor Apache
CMD ["apache2-foreground"]