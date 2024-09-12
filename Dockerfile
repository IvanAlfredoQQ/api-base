# Usa una imagen de PHP con las extensiones necesarias
FROM php:8.1-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Instala Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo en /var/www/html
WORKDIR /var/www/html

# Copia los archivos de la aplicación
COPY . .

# Instala dependencias de Composer
RUN composer install

# Da permisos a las carpetas necesarias para Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 9000 para PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
