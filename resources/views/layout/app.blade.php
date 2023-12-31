<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Devstagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-200">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-black">Devstagram</h1>
                <nav class="flex gap-2 items-center text-sm">
                    <a class="font-bold uppercase text-gray-600" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600" href="/crear-cuenta">Crear Cuenta</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-2xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase text-sm">
            Devstagram - Todos los derechos reservados {{ now()->year }}
        </footer>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
