# Utiliser l'image PHP 8.2-fpm
FROM php:8.2-fpm

# Installer les dépendances nécessaires pour PHP
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

# Installer Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copier le fichier docker-entrypoint.sh dans le conteneur
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

# Donner les permissions d'exécution au script docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port 8000
EXPOSE 8000

# Définir le script d'entrée
ENTRYPOINT ["docker-entrypoint.sh"]

# Commande par défaut : démarrer le serveur Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
