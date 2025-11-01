# Run this script in terminal after pulling the repository

cp .env.example .env
php artisan key:generate
php artisan migrate

## cp .env.example .env → Creates your real .env file from the example template.

## php artisan key:generate → Generates a unique app key for encryption/security.

## php artisan migrate → Runs all database migrations.

# Reverb server

## php artisan reverb:start → Starts the Reverb WebSocket server for real-time events.
