<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
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

        User::factory(9)->create();

        Category::factory()->count(36)->sequence(
            // Instrument types
            ['name' => 'Keyboards'], // 1
            ['name' => 'Strings'], // 2
            ['name' => 'Brass'], // 3
            ['name' => 'Woodwinds'], // 4
            ['name' => 'Percussion'], // 5

            // Accessory/tool/device types
            ['name' => 'Audio'], // 6
            ['name' => 'MIDI'], // 7
            ['name' => 'Audio/MIDI'], // 8

            // Keyboard subcategories
            [
                'name' => 'Pianos', // 9
                'parent_id' => 1
            ],
            [
                'name' => 'Electronic Keyboards', // 10
                'parent_id' => 1
            ],
            [
                'name' => 'Other Keyboards', // 11
                'parent_id' => 1
            ],

            // String subcategories
            [
                'name' => 'Plucked Strings', // 12
                'parent_id' => 2
            ],
            [
                'name' => 'Bowed Strings', // 13
                'parent_id' => 2
            ],
            [
                'name' => 'Orchestral Strings', // 14
                'parent_id' => 2
            ],
            [
                'name' => 'Ethnic Strings', // 15
                'parent_id' => 2
            ],
            [
                'name' => 'Guitars', // 16
                'parent_id' => 12
            ],
            [
                'name' => 'Basses', // 17
                'parent_id' => 12
            ],

            // Percussion subcategories
            [
                'name' => 'General Percussion', // 18
                'parent_id' => 5
            ],
            [
                'name' => 'Drums', // 19
                'parent_id' => 5
            ],
            [
                'name' => 'Ethnic Percussion', // 20
                'parent_id' => 5
            ],
            [
                'name' => 'MIDI Percussion', // 21
                'parent_id' => 5
            ],

            // Audio product subcategories
            [
                'name' => 'Microphones',
                'parent_id' => 6 // 22
            ],
            [
                'name' => 'Amplifiers',
                'parent_id' => 6 // 23
            ],
            [
                'name' => 'Speaker Sets',
                'parent_id' => 6 // 24
            ],
            [
                'name' => 'Phones',
                'parent_id' => 6 // 25
            ],
            [
                'name' => 'Cables',
                'parent_id' => 6 // 26
            ],
            [
                'name' => 'Audio Interfaces',
                'parent_id' => 6 // 27
            ],
            [
                'name' => 'Preamps',
                'parent_id' => 6 // 28
            ],
            [
                'name' => 'DIs',
                'parent_id' => 6 // 29
            ],
            [
                'name' => 'Mixers',
                'parent_id' => 6 // 30
            ],
            [
                'name' => 'Effects',
                'parent_id' => 6 // 31
            ],

            // MIDI product subcategories
            [
                'name' => 'MIDI Controllers',
                'parent_id' => 7 // 32
            ],
            [
                'name' => 'MIDI Sound Modules',
                'parent_id' => 7 // 33
            ],

            // Audio/Midi product subcategories
            [
                'name' => 'Workstations', // 34
                'parent_id' => 8
            ],
            [
                'name' => 'Synthesizers', // 35
                'parent_id' => 8
            ],
            [
                'name' => 'ROMplers', // 36
                'parent_id' => 8
            ],
        )->create();

        Brand::factory()->count(10)->sequence(
            ['name' => 'Corador'],
            ['name' => 'YAHAHA'],
            ['name' => 'CRASSIO'],
            ['name' => 'Ronald'],
            ['name' => 'Tibson'],
            ['name' => 'Steimway'],
            ['name' => 'Rickerbacher'],
            ['name' => 'Pender'],
            ['name' => 'MISSA'],
            ['name' => 'KAWAY']
        )->create();

        Product::factory(10)->create();

        Comment::factory(20)->create();
    }
}
