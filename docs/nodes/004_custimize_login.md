# Customize Login

## Create `AdminController`

```shell
php artisan make:controller AdminController
```

## Create `login` Function

- `mysite\app\Http\Controllers\AdminController.php`

```laravel
public function login()
{
    return view('admin.login.index');
}
```

## Create View `mysite\resources\views\admin\login\index.blade.php`

- Copy `login.html` contents from source package into this file

## Create Admin Login Route

- `mysite\route\web.php`

```laravel
Route::match(['get', 'post'], '/admin', 'AdminController@login');
```

