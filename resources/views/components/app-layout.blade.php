<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 {{ $title }}</title>

    {{-- fontawesome --}}
    {{-- Tipografía --}}

    {{-- CDN - Tailwind --}}
    {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}

    {{-- CDN - Bootstrap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}
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