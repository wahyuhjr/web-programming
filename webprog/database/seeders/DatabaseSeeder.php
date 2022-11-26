<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publishers;
use App\Models\User;
use App\Models\Book_categories;
use App\Models\Categories;
use App\Models\Books;
// use Database\Factories\PublisherFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // Publishers::factory(5)->create();
        // Categories::factory(5)->create();
        Books::factory(10)->create();

        // DB::create([
        //     ['name' => 'Mark Manson','address' => 'New York','phone' => '087781793086','email' => 'Markmanson@gmail.com'],
        //     ['name' => 'Henry Manampiring','address' => 'Jakarta','phone' => '085781793446','email' => 'HenryManampiring@gmail.com'],
        //     ['name' => 'Morgan Housel','address' => 'London','phone' => '089781793446','email' => 'MorganHousel@gmail.com'],
        //     ['name' => 'ames Clear','address' => 'London','phone' => '089786593446','email' => 'AmesClear@gmail.com'],
        // ]);


    }
}
