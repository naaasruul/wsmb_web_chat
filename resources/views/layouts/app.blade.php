<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <header>
        @if(Auth())
            @include('layouts.loggedin-header')
        @else
            @include('layouts.header')
        @endif
    </header>
    <main class="py-5 bg-light">
        <section class="container">
            @yield('section')
        </section>
    </main>

    <footer class="p-5 my-5 bg-dark text-center text-light">
        <p>&copy; 2024 Nasrul</p>
    </footer>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>