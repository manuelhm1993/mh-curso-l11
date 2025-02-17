<x-app-layout>
    <x-slot:title>
         - Posts
    </x-slot>

    <x-slot:header>
        <h1>Listado de posts</h1>
    </x-slot>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
