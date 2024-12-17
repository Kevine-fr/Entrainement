#!/bin/sh

# Installer les dépendances Node.js (au cas où elles n'auraient pas été installées)
npm install

# Lancer le serveur PHP en arrière-plan
php artisan serve --host=0.0.0.0 --port=8000 &

# Lancer les tâches npm (par exemple, le développement du frontend)
npm run dev &

# Garder le conteneur en cours d'exécution
wait
