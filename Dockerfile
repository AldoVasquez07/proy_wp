FROM wordpress:php8.2-apache

# Las extensiones mysqli ya vienen en la imagen oficial de WP, 
# pero no estorba dejarlas si planeas meter otros scripts PHP.
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos el contenido
COPY ./languages /var/www/html/wp-content/languages
COPY ./plugins /var/www/html/wp-content/plugins
COPY ./themes /var/www/html/wp-content/themes
COPY ./uploads /var/www/html/wp-content/uploads

# Ajustamos permisos de forma recursiva y segura
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html/wp-content -type d -exec chmod 755 {} \; && \
    find /var/www/html/wp-content -type f -exec chmod 644 {} \;

# Exponemos el puerto que usa Render (80 por defecto en Apache)
EXPOSE 80
