<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $categories = [
        ['name' => 'Self-help'],
        ['name' => 'fiction'],
        ['name' => 'Romance'],
        ['name' => 'Comedy'],
       ];

       Categories::insert($categories);
    }
}
