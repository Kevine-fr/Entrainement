# Utiliser l'image de base PHP
FROM php:8.2-fpm

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    git \
    unzip \
    libxml2-dev \
    curl \
    gnupg2 \
    lsb-release

# Copiez le fichier .env dans le conteneur
COPY .env /var/www/.env

# Copier les fichiers de l'application dans le répertoire de travail
WORKDIR /var/www
COPY . .

# Installer les dépendances PHP via Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction

# Exposer le port 8000
EXPOSE 8000

# Ajouter le script de démarrage (si nécessaire)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
