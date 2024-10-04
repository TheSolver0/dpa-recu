# Utilisation d'une image officielle PHP
FROM php:7.4-apache

# Copier le code source de l'application dans le conteneur
COPY . /var/www/html/

# Configuration des permissions
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80
