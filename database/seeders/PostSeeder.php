<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->crear_post_con_comentarios(100);
    }

    //------------------------------------ Crear 100 posts
    private function crear_post(int $cantidad_posts): void
    {
        Post::factory($cantidad_posts)->create();
    }

    //------------------------------------ Crear 100 posts con comentarios asociados
    private function crear_post_con_comentarios(int $cantidad_posts): void
    {
        for ($i = 0; $i < $cantidad_posts; $i++) 
        {
            $cantidad_comentarios = random_int(1, 10);
            $post = Post::factory()->create();

            Comment::factory()->count($cantidad_comentarios)->for($post, 'commentable')->create();
        }
    }
}
