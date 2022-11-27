<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            ['title' => 'Seni untuk bersikap bodo amat','author' => 'Mark Manson', 'year' => '2016','Synopsis' => 'Sebuah Seni untuk Bersikap Bodo Amat adalah buku pertama karya Mark Manson, seorang narablog kenamaan dengan lebih dari 2 juta pembaca. Ia tinggal di kota New York.','image'=>'/assets/images/book-1.jpg'],

           

           
        ];

        Books::insert($book);
    }
}
