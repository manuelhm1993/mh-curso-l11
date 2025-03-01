<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'    => ['required', 'min:5', 'max:255'], //Forma alternativa de crear reglas
            'slug'     => 'required|min:5|max:255|unique:posts', //Valida que no exista en la DB
            'content'  => 'required',
            'category' => 'required|max:255',
        ]);

        $post = Post::create($validated);

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
