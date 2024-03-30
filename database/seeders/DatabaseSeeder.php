<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'username' => 'IAmTheSuperAdmin',
            'email' => 'superadmin@corador.com',
            'is_admin' => false,
            'is_superadmin' => true
        ]);
        Brand::insert([
            [
                'name' => 'Corador',
                'description' => fake()->text(20),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        Category::factory()->count(9)->sequence(
            ['name' => 'Keyboard'],
            ['name' => 'Guitar'],
            ['name' => 'Percussion'],
            ['name' => 'Chromatic Percussion'],
            ['name' => 'Strings'],
            ['name' => 'Woodwinds'],
            ['name' => 'Brass'],
            ['name' => 'Audio'],
            ['name' => 'MIDI']
        )->create();
        Product::factory()->create();
    }
}
