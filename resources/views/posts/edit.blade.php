<x-app-layout>
    <x-slot:title>
         - Posts - Edit
    </x-slot>

    <x-slot:header>
        <a href="{{ route('posts.show', $post) }}">Volver a post</a>

        <h1>Formulario para editar post</h1>
    </x-slot>

    <form action="{{ route('posts.update', $post) }}" method="POST">
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
            Slug:
            <input type="text" name="slug" id="slug" placeholder="Slug del post" 
            value="{{ $post->slug }}">
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

    @push('js')
        <script>
            const slugify = (str) => {
                str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing white space
                str = str.toLowerCase(); // convert string to lowercase
                str = str.replace(/[^a-z0-9 -]/g, '') // remove any non-alphanumeric characters
                        .replace(/\s+/g, '-') // replace spaces with hyphens
                        .replace(/-+/g, '-'); // remove consecutive hyphens
                return str;
            };

            window.addEventListener("load", (e) => {
                const title = document.querySelector('#title');
                const slug = document.querySelector('#slug');

                slug.readOnly = true; //Disabled enviará la información

                title.addEventListener('keyup', (e) => {
                    slug.value = slugify(title.value);
                });
            });
        </script>
    @endpush
</x-app-layout>