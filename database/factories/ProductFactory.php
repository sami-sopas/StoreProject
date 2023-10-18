<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all()->random();


        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(0, 100),
            'existance' => $this->faker->numberBetween(0, 20),
            'description' => $this->faker->word(),
            'category_id' => $category->id,
            'user_id' => User::factory(),
        ];
    }
}
