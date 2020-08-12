<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title") {{ config('app.name') }}</title>

        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        @yield('content')
    </body>
</html>
