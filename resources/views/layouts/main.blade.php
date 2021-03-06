<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title") {{ config('app.name') }}</title>

        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <nav>
            <div class="container mx-auto flex items-center justify-between px-4 py-6">
                <ul class="flex items-center">
                    <li>
                        <a href="#">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
