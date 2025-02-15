<x-app-layout>
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
</x-app-layout>