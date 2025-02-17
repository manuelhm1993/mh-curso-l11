<?php

namespace Database\Seeders;

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
        //------------------------------------ Crear 2 posts
        for ($i=0; $i < 2; $i++) 
        {
            Post::create([
                'title'        => fake()->sentence(),
                'content'      => fake()->paragraph(),
                'category'     => fake()->word(),
                'is_active'    => fake()->boolean(),
                'published_at' => now(),
            ]);
        }
    }
}
