# UI Auth

## Enable Laravel Built-in Authentication

```shell
composer require laravel/ui
php artisan ui vue --auth
```

## Setup Database Connectivity

- `mysite\.env`

```laravel
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coreui
DB_USERNAME=root
DB_PASSWORD=password
```

### First Time

```laravel
php artisan migrate
```

### Existing

```laravel
php artisan migrate:refresh
```