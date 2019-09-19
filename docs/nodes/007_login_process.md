# Login Process

## Modified `login` Function

```laravel
if ($request->isMethod('post')) {
    $data = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
        echo "Success";
        die;
    } else {
        echo "failed";
        die;
    }
}
return view('admin.login.index');
```

## Modified `login` View

### `login` Form Method as `POST`

```laravel
form action="{{ url('admin') }}" method="POST"
```

### Add `@csrf` to `login` Form