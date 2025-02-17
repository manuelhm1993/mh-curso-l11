<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 {{ $title }}</title>

    {{-- fontawesome --}}
    {{-- Tipografía --}}
</head>
<body>
    <header>
        {{ $header }}
    </header>

    <section>
        {{ $slot }}
    </section>

    <footer></footer>
</body>
</html>