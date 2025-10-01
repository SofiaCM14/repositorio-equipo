# Usamos la imagen oficial de PHP con FPM
FROM php:8.2-fpm

# Instalar extensiones necesarias para MySQL y otros usos comunes
RUN apt-get update && apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libonig-dev \
        libzip-dev \
        zip \
        unzip \
        git \
        curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar el código de la aplicación al contenedor
COPY ./app /var/www/html

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto PHP-FPM
EXPOSE 9000

# Comando por defecto para PHP-FPM
CMD ["php-fpm"]
