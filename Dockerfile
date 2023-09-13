# Use a imagem oficial do PHP 8.2 com Apache
FROM php:8.2-apache

# Atualize o sistema e instale as extensões PHP necessárias
RUN apt-get update && \
    apt-get install -y libjpeg-dev libfreetype6-dev libpng-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql

# Configure o Apache para usar o diretório /var/www/html como DocumentRoot
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Habilite o módulo rewrite do Apache
RUN a2enmod rewrite

# Exponha a porta 80
EXPOSE 80

# Inicie o Apache no primeiro plano
CMD ["apache2-foreground"]
