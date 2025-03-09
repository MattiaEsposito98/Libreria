<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Libreria Online')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-secondary-subtle d-flex flex-column min-vh-100">
    <header>
        @include('partials.navbar')
    </header>

    <main class="container-fluid flex-grow-1">
        @yield ('content')
    </main>


    @include('partials.footer')

</body>

</html>
