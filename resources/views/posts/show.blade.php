<x-app-layout>
    <x-slot:title>
         - Posts - Show
    </x-slot>

    <x-slot:header>
        <a href="{{ route('posts.index') }}">Volver a post</a>

        <h1>Título: {{ $post->title }}</h1>
    </x-slot>

    <p>
        <b>Categoría:</b> {{ $post->category }}
    </p>

    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post) }}">Editar post</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar post</button>
    </form>
</x-app-layout>