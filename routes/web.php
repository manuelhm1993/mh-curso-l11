<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Bienvenidos a MHenriquez';
});

Route::get('/posts', function () {
    return 'Aquí se mostrarán los posts';
});

Route::get('/posts/{post}', function ($post) {
    return 'Aquí se mostrará el post ' . $post;
});

// Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
//     $data = 'Aquí se mostrará el post ' . $post;
//     $data .= (is_null($category)) ? '' : ' de la categoría ' . $category;

//     return  $data;
// });