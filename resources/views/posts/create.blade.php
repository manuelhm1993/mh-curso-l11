<x-app-layout>
    <x-slot:title>
         - Posts - Create
    </x-slot>

    <x-slot:header>
        <a href="{{ route('posts.index') }}">Volver a post</a>
        
        <h1>Formulario para crear nuevo post</h1>
    </x-slot>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
        <label>
            Título:
            <input type="text" name="title" id="title" placeholder="Título del post">
        </label>

        <br><br>

        <label>
            Categoría:
            <input type="text" name="category" id="category" placeholder="Categoría del post">
        </label>

        <br><br>

        <label>
            Contenido: 
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </label>

        <br><br>

        <button type="submit">Crear post</button>
        <button type="reset">Limpiar</button>
    </form>
</x-app-layout>