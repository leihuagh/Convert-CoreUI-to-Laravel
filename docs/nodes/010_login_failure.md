# Login Failure Handler

## Redirect to Login Form When Failure

```laravel
return redirect()->route('adminLogin')->with('flash_message_error', 'Invalid Email or Password');
```

## Display Error

```laravel
@if (Session::has('flash_message_error'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{!! session('flash_message_error') !!}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            @endif
```