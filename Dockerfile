# Utiliser l'image PHP 8.2-fpm
FROM php:8.2-fpm

# Installer les dépendances PHP nécessaires
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

# Installer Node.js et NPM
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les extensions PHP nécessaires
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql zip

# Copier le fichier d'entrée du conteneur
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

# Rendre le fichier docker-entrypoint.sh exécutable
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port 8000
EXPOSE 8000

# Définir l'entrée du conteneur
ENTRYPOINT ["docker-entrypoint.sh"]

# Commande par défaut si aucun autre argument n'est fourni
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
