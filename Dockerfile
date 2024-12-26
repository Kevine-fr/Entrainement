FROM php:8.2-fpm

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libpq-dev \  
    # Ce paquet est nécessaire pour PostgreSQL
    # libonig-dev \
    git \
    unzip \
    libxml2-dev \
    curl \
    gnupg2 \
    lsb-release \
    && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Copier le fichier .env dans le conteneur
COPY .env.example /var/www/.env

# Copier les fichiers de l'application dans le répertoire de travail
WORKDIR /var/www
COPY . .

# Installer les dépendances PHP via Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Générer la clé de l'application Laravel
RUN php artisan key:generate

# Exécuter les migrations
RUN php artisan migrate --force

# Exposer le port 8000 pour l'accès à l'application Laravel
EXPOSE 8000

# Démarrer le serveur Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
