<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author_id' => Author::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'description' => $this->faker->text(250),
            'body' => $this->faker->text(3000),
            'publication_date' => $this->faker->date(),
            'isbn' => $this->faker->isbn13(),
        ];
     
    }
}
