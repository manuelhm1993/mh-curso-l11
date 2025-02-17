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
</x-app-layout>