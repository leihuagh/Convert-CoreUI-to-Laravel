@csrf
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="icon-user"></i>
        </span>
        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    </div>
    <div>{{ $errors->first('email') }}</div>
</div>
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="icon-lock"></i>
        </span>
        <input class="form-control" type="password" name="password" placeholder="Password">
    </div>
    <div>{{ $errors->first('password') }}</div>
</div>
