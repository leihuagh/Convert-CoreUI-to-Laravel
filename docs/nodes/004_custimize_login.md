# Customize Login

## Create a Login View

### Create Folders and File

- Create folders and file underneath `mysite\resources\views\admin\login\index.blade.php`

### Obtain Login Contents

- Copy `login.html` contents from `dist` of `coreui` into this file
- Remove unused content and save the file

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

## Create Admin Login Route

- `mysite\route\web.php`

```laravel
Route::match(['get', 'post'], '/admin', 'AdminController@login');
```

