<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productCount = \App\Models\Product::count();
        $name = $productCount < 1 ? 'Corador' : fake()->regexify('[A-Z]{1}[a-z]{'.rand(1,9).'}');
        return [
            'name' => $name,
            'description' => fake()->text(100)
        ];
    }
}
