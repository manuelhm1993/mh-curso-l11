<x-app-layout>
    <x-slot:title>
         - Posts
    </x-slot>

    <x-slot:header>
        <h1>Listado de posts</h1>

        <a href="{{ route('posts.create') }}">Nuevo post</a>
    </x-slot>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }} || Comentarios: {{ $post->comments->count() }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-app-layout>
