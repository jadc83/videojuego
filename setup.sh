#!/bin/bash

# Solicitar el nombre del usuario para PostgreSQL
read -p "Introduce el nombre del usuario para PostgreSQL: " user

# Solicitar el nombre de la base de datos
read -p "Introduce el nombre de la base de datos para PostgreSQL: " bd

# Crear el usuario en PostgreSQL
sudo -u postgres createuser -P "$user"

# Crear la base de datos y asignar el propietario
sudo -u postgres createdb -O "$user" "$bd"

# Instalar dependencias npm para TailwindCSS
npm install -D tailwindcss postcss autoprefixer

# Inicializar TailwindCSS
npx tailwindcss init

# Instalar Flowbite
npm install flowbite

# Instalar Laravel Breeze
composer require laravel/breeze --dev

# Ejecutar la instalación de Laravel Breeze
php artisan breeze:install

echo "Script completado exitosamente."

