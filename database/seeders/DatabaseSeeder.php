<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'name' => 'Sawi',
            'harga' => 10000,
            'image' => '/img/sawi.jpg',
            'category_id' => 1,
            'slug' => 'sawi',
            'excerpt' => 'sawi segar enak woy',
            'description' => 'sawi segar enak woy tapi bohong.'
        ]);

        Product::create([
            'name' => 'Apel',
            'harga' => 20000,
            'image' => '/img/apel.jpg',
            'category_id' => 2,
            'slug' => 'apel',
            'excerpt' => 'apel segar enak woy',
            'description' => 'apel segar enak woy tapi bohong.'
        ]);
        
        Category::create([
            'name' => 'Sayur',
            'slug' => 'sayur',
        ]);

        Category::create([
            'name' => 'Buah',
            'slug' => 'buah',
        ]);
    }
}