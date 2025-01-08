# Utiliser une image officielle PHP avec Apache
FROM php:8.4-apache

# Copier tous les fichiers du projet dans le répertoire de travail
COPY . /var/www/html

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www/html

# Installer les dépendances si vous utilisez Composer (optionnel)
# RUN apt-get update && apt-get install -y zip unzip git && \
#     curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Exposer le port 80
EXPOSE 80

# Commande par défaut pour lancer Apache
CMD ["apache2-foreground"]
