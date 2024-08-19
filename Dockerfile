# Utilisation de l'image PHP officielle
FROM php:8.2-fpm

# Installation des extensions PHP requises
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    git \
    unzip \
    libxml2-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql zip

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers de l'application
COPY . /var/www/html

# Installer les dépendances Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer install

# Définir les permissions
RUN chown -R www-data:www-data /var/www/html

# Exposer le port de l'application
EXPOSE 8000

# Script d'entrée pour exécuter les migrations et lancer le serveur
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Définir le script d'entrée
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
