<?php

namespace Database\Seeders;

use App\Models\Publishers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher= [
            ['name' => 'Mark Manson','address' => 'New York','phone' => '087781793086','email' => 'Markmanson@gmail.com'],
            ['name' => 'Henry Manampiring','address' => 'Jakarta','phone' => '085781793446','email' => 'HenryManampiring@gmail.com'],
            ['name' => 'Morgan Housel','address' => 'London','phone' => '089781793446','email' => 'MorganHousel@gmail.com'],
            ['name' => 'ames Clear','address' => 'London','phone' => '089786593446','email' => 'AmesClear@gmail.com'],
        ];

        Publishers::insert($publisher);
    }
}
