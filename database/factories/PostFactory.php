<?php

namespace Database\Factories;

use App\Models\Category;
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
        $categoryId = $this->getRandomCategoryId();

        return [
            'title'         => fake()->name(),
            'content'       => $this->faker->paragraphs(asText: true),
            'category_id'   => $categoryId,
        ];
    }

    private function getRandomCategoryId(): int
    {
        $category = Category::inRandomOrder()->first();

        return $category->id ?? 1;
    }
}
