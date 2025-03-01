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
            <input type="text" name="title" id="title" placeholder="Título del post"
            value="{{ old('title') }}">
        </label>

        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>
            Slug:
            <input type="text" name="slug" id="slug" placeholder="Slug del post"
            value="{{ old('slug') }}">
        </label>

        @error('slug')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>
            Categoría:
            <input type="text" name="category" id="category" placeholder="Categoría del post"
            value="{{ old('category') }}">
        </label>

        @error('category')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>
            Contenido: 
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
        </label>

        @error('content')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Crear post</button>
        
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