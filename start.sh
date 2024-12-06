#!/bin/bash

if [ -f "backend/.env" ]; then
    echo "A .env fájl már létezik"
else
    cp backend/.env.example backend/.env
fi

if [ -f ".env" ]; then
    echo "A .env fájl már létezik"
else
    ln -s backend/.env
fi

if ! [ -d "frontend/node_modules" ]; then
    docker run --rm  -v "$(pwd)/frontend:/app" --entrypoint npm idomi27/vue install
fi

docker compose up -d

docker compose exec backend composer install

docker compose exec backend php artisan migrate

if [ -z "${APP_KEY}" ]; then
    docker compose exec backend php artisan key:generate
else
    echo "Az API kulcs már létezik" 
fi