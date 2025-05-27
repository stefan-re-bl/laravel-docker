#!/bin/bash

# Script para corregir permisos y levantar Laravel en Docker

echo "🛠️ Corrigiendo permisos..."

# Forzar propiedad y permisos correctos
sudo chown -R "$USER":"$USER" src/storage src/bootstrap/cache
sudo chmod -R 775 src/storage src/bootstrap/cache

# Asegurar archivo de log existente
touch src/storage/logs/laravel.log
chmod 664 src/storage/logs/laravel.log

# Exportar UID y GID
export UID=$(id -u)
export GID=$(id -g)

echo "🚀 Levantando contenedores con UID=$UID y GID=$GID..."
docker-compose up --build