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
    Route::post('/', 'store')->name('store');
    Route::get('/{post}', 'show')->name('show');
});
