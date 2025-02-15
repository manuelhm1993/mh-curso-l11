<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="info" class="mb-4">
            {{-- Contenido variable del componente --}}
            <x-slot:title>
                Título
            </x-slot>

            Contenido del alert
        </x-alert2>

        <p>Hola mundo</p>
    </div>
</body>
</html>