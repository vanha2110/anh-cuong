## Required System
```
php ^7.4
apache or nginx
mysql
composer
nodejs
```

## Setup mysql
```
setup mysql with username/password:root/root
download mysql workbend
link: https://dev.mysql.com/downloads/workbench/
create schema with name: laravel-shop
```

## first init
```
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
```

## npm & composer
```
composer install
npm install
npm run dev
```

| page       | URL                                                |
|:-----------|:---------------------------------------------------|
| dashboard |     localhost:8000/login                |

