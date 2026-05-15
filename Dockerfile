FROM wordpress:php8.2-apache

# Instalamos extensiones por si acaso
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos SOLO tus carpetas de contenido, NO el index.php de la raíz
COPY ./languages /var/www/html/wp-content/languages
COPY ./plugins /var/www/html/wp-content/plugins
COPY ./themes /var/www/html/wp-content/themes
COPY ./uploads /var/www/html/wp-content/uploads

RUN chown -R www-data:www-data /var/www/html