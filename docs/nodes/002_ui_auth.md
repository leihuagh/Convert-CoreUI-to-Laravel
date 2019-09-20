# UI Auth

## Enable Laravel Built-in Authentication

```shell
composer require laravel/ui --dev
php artisan ui vue --auth
```

## Setup Database Connectivity

### Create a Database in MySQL

- Database name: `coreui`
- Collation: `utf8mb4_unicode_ci`

### Setup `.env`

- `mysite\.env`

```laravel
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coreui
DB_USERNAME=root
DB_PASSWORD=<Your MySQL password>
```

## Migrate

### First Time

```laravel
php artisan migrate
```

### Existing

```laravel
php artisan migrate:refresh
```