<?php

namespace Database\Factories;

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
        $brandCount = \App\Models\Brand::count();
        if($brandCount < 1)
            \App\Models\Brand::factory(10)->create();
        $brandCount = \App\Models\Brand::count();

        return [
            'name' => fake()->regexify('[A-Z]{'.rand(3,4).'}-[0-9]{'.rand(3,4).'}'),
            'brand_id' => rand(1,$brandCount),
            'condition' => rand(0,1) < 1 ? 'new' : 'reconditioned',
            'acoustic_electric' => rand(0,1) < 1 ? 'acoustic' : 'electric',
            'description' => fake()->text(100),
            'specs' => '{}',
            'price' => fake()->randomFloat(1,1000000,2),
            'active' => (bool)rand(0,1)
            //
        ];
    }
}
