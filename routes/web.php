<?php

use Illuminate\Support\Facades\Route;

//------------------------------------ Importa el controlador para poder usarlo
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//------------------------------------ Si el controlador es de tipo __invoke no es necesario especificarlo
Route::get('/', HomeController::class);

//------------------------------------ Ruta de recursos normal
Route::resource('posts', PostController::class);

//------------------------------------ Ruta de recursos manual
/*Route::prefix('articulos')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{post}', 'show')->name('show');
    Route::get('/{post}/edit', 'edit')->name('edit');
    Route::put('/{post}', 'update')->name('update');
    Route::delete('/{post}', 'destroy')->name('destroy');
});
*/

//------------------------------------ Ruta de recursos para cambiar los prefijos
/*Route::resource('articulos', PostController::class)->names([
    'index'   => 'posts.index',
    'create'  => 'posts.create',
    'store'   => 'posts.store',
    'show'    => 'posts.show',
    'edit'    => 'posts.edit',
    'update'  => 'posts.update',
    'destroy' => 'posts.destroy',
])->parameters([
    'articulos' => 'post' 
]);*/

//------------------------------------ Ruta de recursos para cambiar los prefijos en una línea
/*Route::resource('articulos', PostController::class)->names('posts')->parameters([
    'articulos' => 'post' 
]);*/
