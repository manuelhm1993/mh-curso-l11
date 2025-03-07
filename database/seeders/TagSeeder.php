<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    private array $tags = [
        ['name' => 'Programación'],
        ['name' => 'Frontend'],
        ['name' => 'Backend'],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->crear_tags();
        $this->agregar_tags_a_post();
    }

    private function crear_tags(): void
    {
        foreach ($this->tags as $tag) 
        {
            Tag::factory()->create(
                $tag,
            );
        }
    }

    private function agregar_tags_a_post(): void
    {
        $posts = Post::all();
        $n = count($this->tags);

        foreach ($posts as $post) 
        {
            $n_tags = random_int(1, $n);

            for ($i = 0; $i < $n_tags; $i++) 
            {
                $tag_id = random_int(($i + 1), $n_tags);

                if($post->tags()->where('tags.id', $tag_id)->get()->count() == 0)
                {
                    $post->tags()->attach($tag_id);
                }
            }
        }
    }
}
