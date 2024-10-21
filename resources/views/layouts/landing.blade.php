<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('layouts._partials.barra')
    <main>
    @yield('content')
    </main>
</body>
</html>
