@extends('layouts.app') {{-- Heredar de la plantilla layouts.app --}}

@section('title', env('app'))

{{-- Directiva para código estático y se puede usar en varios lugares --}}
@push('css')
    <style>
        body {
            background-color: #f3f3f3;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: red;
        }
    </style>
@endpush

{{-- Indicar el contenido de la sección --}}
@section('content')
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
@endsection