# ABM-CRUD-

- Crear las migraciones: php artisan migrate

- Ejecutar el seeders: php artisan db:seed --class=UserSeeder
  en el .env configurar el puerto (Opcional) y ponerle el nombre a la database

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3307
  DB_DATABASE=usuarios
  DB_USERNAME=root
  DB_PASSWORD=

- Correr proyecto localmente: php artisan serve
