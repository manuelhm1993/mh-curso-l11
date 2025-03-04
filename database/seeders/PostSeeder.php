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
        //------------------------------------ Crear 100 posts con comentarios asociados
        Post::factory(100)
            ->has(Comment::factory()->count(random_int(1, 10)))
            ->create();
    }
}
