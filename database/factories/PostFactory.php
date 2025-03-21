<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title'        => $title,
            'slug'         => str($title)->slug('-'),
            'content'      => fake()->text(random_int(100, 1000)),
            'category'     => str()->title(fake()->word()),
            'is_active'    => fake()->boolean(),
            'published_at' => fake()->dateTime(),
        ];
    }
}
