<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => Author::factory(),
            'title'     => $this->faker->sentence(),
            'content'   => $this->faker->paragraphs(3, true),
        ];
    }
}