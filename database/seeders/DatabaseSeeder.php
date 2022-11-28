<?php

namespace Database\Seeders;

use App\Models\Brand;
use  \App\Models\User;
use App\Models\Category;
use  \App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Ariansyah',
            'username' => 'arie',
            'email' => 'arian@gmail.com',
            'password' => bcrypt('arie')
        ]);
        User::create([
            'name' => 'Cinta Lestari',
            'username' => 'cinta',
            'email' => 'cinta@gmail.com',
            'password' => bcrypt('cinta')
        ]);

        // User::factory(2)->create();
        Product::factory()->create();
        Brand::factory()->create();
        Category::factory()->create();
    }
}
