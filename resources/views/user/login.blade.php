@extends('layouts.app')

@section('section')

@if(session('status'))
<div
    class="alert alert-success"
    role="alert">
<ul>
    <li>{{session('status')}}</li>
</ul>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif



<h1>Login</h1>

<div class="card p-3">
    <form action="{{route('login-user')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
@endsection