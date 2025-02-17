@extends('layouts.app')

@section('title', 'Laravel 11 - Posts')

@section('header')
    <h1>Listado de posts</h1>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Categoría</th>
                <th>Fecha de publicación</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->published_at->format('d/m/Y') }}</td>
                <td>{{ $post->is_active ? 'Activo' : 'Inactivo' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection