<?php

use Illuminate\Support\Facades\Route;

//------------------------------------ Importa el controlador para poder usarlo
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//------------------------------------ Si el controlador es de tipo __invoke no es necesario especificarlo
Route::get('/', HomeController::class);

//------------------------------------ Agrupar y nombrar rutas
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');

    //------------------------------------ El orden de las rutas importa por el flujo de ejecución
    Route::get('/{post}', 'show')->name('show');
});

//------------------------------------ Rutas con parámetros opcionales
// Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
//     $data = 'Aquí se mostrará el post ' . $post;
//     $data .= (is_null($category)) ? '' : ' de la categoría ' . $category;

//     return  $data;
// });