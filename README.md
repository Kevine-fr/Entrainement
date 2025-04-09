# 🚀 Entraînement Dev – Environnement de Développement Laravel avec DevContainer

Ce projet est une base d'entraînement pour développer une application Laravel dans un environnement **Dockerisé** via **DevContainer** dans VS Code.

---

## ⚙️ Configuration DevContainer

Le fichier `.devcontainer/devcontainer.json` contient la configuration suivante :

```json
{
  "name": "Entrainement Dev",
  "dockerComposeFile": "../docker-compose.yml",
  "service": "app",
  "workspaceFolder": "/var/www",
  "forwardPorts": [8000, 3306, 8080],
  "features": {
    "ghcr.io/devcontainers-extra/features/composer:1": {}
  },
  "postCreateCommand": "cp .env.example .env && php artisan key:generate && composer install"
}
