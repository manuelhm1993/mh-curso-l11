<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreated;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        //Recupera todos los posts con sus respectivos comentarios y etiquetas
        $posts = Post::with(['comments', 'tags'])->orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        //Validación de datos
        $validated = $request->validated();

        //Creación del nuevo post
        $post = Post::create($validated);

        //Envío de correo
        Mail::to('prueba@prueba.com')->send(new PostCreated($post));

        //Redirección al listado de posts
        return redirect()->route('posts.index');
    }

    public function show(Post $post): View
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated = $request->validate([
            'title'    => ['required', 'min:5', 'max:255'], 
            'slug'     => "required|min:5|max:255|unique:posts,slug,{$post->id}", //Ignora el registro actual
            'content'  => 'required',
            'category' => 'required|max:255',
        ]);

        $post->update($validated);

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post): RedirectResponse
    {
        $deleted = $post->delete();

        return redirect()->route('posts.index');
    }
}
