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

//------------------------------------ Rutas con parámetros opcionales
// Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
//     $data = 'Aquí se mostrará el post ' . $post;
//     $data .= (is_null($category)) ? '' : ' de la categoría ' . $category;

//     return  $data;
// });

//------------------------------------ Eloquent ORM
Route::get('prueba', function () {
    //------------------------------------ Crear registros
    /*$post = Post::create([
        'title' => 'TíTuLo DE prueBA 4', 
        'content' => 'Contenido de prueba 4', 
        'category' => 'Categoría de prueba 4'
    ]);*/

    //------------------------------------ Actualizar registros
    /*$post = Post::where('id', 1)->first();
    
    $post->category = 'Desarrollo web';
    $post->save();

    $post = Post::where('id', 4)->update(['category' => 'Categoría de prueba 4']);*/

    //------------------------------------ Eliminar registros
    //$post_deleted = Post::where('id', 1)->delete();

    //------------------------------------ Listar registros
    /*
    //Todos
    //$posts = Post::all();*/

    //Campos especificados con ordenamiento ascendente
    //$posts = Post::orderBy('category', 'asc')->select('id', 'title', 'category')->get();

    //------------------------------------ Encontrar un registro
    $post = Post::find(4);

    return $post;
});