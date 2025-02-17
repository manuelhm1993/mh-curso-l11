<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Valor por defecto de la sección --}}
    <title>@yield('title', 'Laravel 11')</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    {{-- fontawesome --}}
    {{-- Tipografía --}}

    {{-- Directiva para código estático y se puede usar en varios lugares --}}
    @stack('css')
</head>
<body>
    <header>
        @yield('header')
    </header>

    <section>
        @yield('content') {{-- Contenido variable --}}
    </section>

    <footer>
        @yield('footer')
    </footer>

    @stack('js')
</body>
</html>