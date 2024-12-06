@extends('layouts.app')

@section('section')
<h1>Login</h1>

<div class="card p-3">
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

    </form>
</div>
@endsection