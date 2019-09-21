# Correct View

## Correct `CSS` and `JS` Links Path

### `CSS`

- Sample
  
```laravel
<link href="{{ asset('backend/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
```

### `JS`

- Sample

```laravel
<script src="{{ asset('backend/vendors/jquery/js/jquery.min.js') }}"></script>
```

## Update Login View Structure

### Create `admin` Layouts

- Create a folder called `admin`  underneath `mysite\resources\views\layouts\`
- Create two folders, `forms` and `base` underneath `mysite\resources\views\layouts\admin\`

### Create `CSS` Base Files

- Create a file called `css.blade.php` underneath `mysite\resources\views\layouts\admin\base\`
- Copy all `css` links into `mysite\resources\views\layouts\admin\base\css.blade.php`

### Create `JS` Base Files

- Create a file called `js.blade.php` underneath `mysite\resources\views\layouts\admin\base\`
- Copy all `js` links into `mysite\resources\views\layouts\admin\base\js.blade.php`

### Create Login Form File

- Create a file called `login.blade.php` underneath `mysite\resources\views\layouts\admin\forms\`
- Move `Username` and `Password` from `mysite\resources\views\admin\login\index.blade.php` to `mysite\resources\views\layouts\admin\forms\login.blade.php`
