@extends('layouts.app')


@section('section')
<h1>Register</h1>

<div class="card p-3">
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

    </form>
</div>
@endsection