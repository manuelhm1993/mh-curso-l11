<x-app-layout>
    <x-slot:title>
         - Usuarios
    </x-slot>

    <x-slot:header>
        <h1>Listado de usuarios</h1>
    </x-slot>

    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user) }}">
                    {{ $user->name }} || {{ $user->phone->number }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $users->links() }}
</x-app-layout>
