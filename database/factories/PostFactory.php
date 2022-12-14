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
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 5)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->sentence(),
            // 'body' => '<p>' . implode('</p><p>', fake()->paragraphs(mt_rand(5, 8))) . '</p>',
            'body' => collect(fake()->paragraphs(mt_rand(5, 8)))
                        ->map(function($p) {
                            return "<p>$p</p>";
                        })
                        ->implode(''),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5)
        ];
    }
}
