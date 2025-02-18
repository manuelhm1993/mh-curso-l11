<x-app-layout>
    <x-slot:title>
         - Posts - Edit
    </x-slot>

    <x-slot:header>
        <a href="{{ route('posts.show', $post->id) }}">Volver a post</a>

        <h1>Formulario para editar post</h1>
    </x-slot>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- La directiva @method('PUT') es equivalente a este input --}}
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        <label>
            Título:
            <input type="text" name="title" id="title" placeholder="Título del post" 
            value="{{ $post->title }}">
        </label>

        <br><br>

        <label>
            Categoría:
            <input type="text" name="category" id="category" placeholder="Categoría del post" 
            value="{{ $post->category }}">
        </label>

        <br><br>

        <label>
            Contenido:
            <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
        </label>

        <br><br>

        <button type="submit">Actualizar post</button>

        {{-- El botón de reset debe ser de tipo input --}}
        <input type="reset" value="Limpiar" />
    </form>
</x-app-layout>