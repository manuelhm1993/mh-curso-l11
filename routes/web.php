<?php

use Illuminate\Support\Facades\Route;

//------------------------------------ Importa el controlador para poder usarlo
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

//------------------------------------ Si el controlador es de tipo __invoke no es necesario especificarlo
Route::get('/', HomeController::class);

//------------------------------------ Controladores de recursos
Route::resources([
    'users' => UserController::class,
    'posts' => PostController::class,
]);

//------------------------------------ Ruta de recursos para cambiar los prefijos en una línea
/*Route::resource('articulos', PostController::class)->names('posts')->parameters([
    'articulos' => 'post' 
]);*/
