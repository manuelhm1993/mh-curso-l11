<?php

use Illuminate\Support\Facades\Route;

//------------------------------------ Importa el controlador para poder usarlo
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//------------------------------------ Si el controlador es de tipo __invoke no es necesario especificarlo
Route::get('/', HomeController::class);

//------------------------------------ Agrupar y nombrar rutas
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');

    //------------------------------------ El orden de las rutas importa por el flujo de ejecución
    Route::get('/{post}', 'show')->name('show');
});

//------------------------------------ Eloquent ORM
Route::get('prueba', function () {
    /*$post = Post::create([
        'title'        => 'Título de prueba 1', 
        'content'      => 'Contenido de prueba 1', 
        'category'     => 'Categoría de prueba 1',
        'published_at' => Carbon::now(),
        'is_active'    => true,
    ]);

    return $post;*/
    
    //------------------------------------ Encontrar un registro
    $post = Post::find(1);

    //------------------------------------ La clase Carbon posee métodos útiles para fechas
    /*$fecha_creacion = $post->created_at;
    $fecha_creacion->diffForHumans();*/

    //------------------------------------ Si es una fecha ordinaria no se tratará como Carbon
    /*$fecha_creacion = new Carbon($post->published_at);

    $fecha_creacion = $post->published_at;
    $fecha_creacion->format('d/m/Y');*/
    
    return dd($post->is_active);
});