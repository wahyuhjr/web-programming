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
            ['title' => 'Seni untuk bersikap bodo amat','author' => 'Mark Manson', 'year' => '2016','Synopsis' => 'Sebuah Seni untuk Bersikap Bodo Amat adalah buku pertama karya Mark Manson, seorang narablog kenamaan dengan lebih dari 2 juta pembaca. Ia tinggal di kota New York.'],

            ['title' => 'Filosofi teras','author' => 'Henry Manampiring', 'year' => '2018','Synonsis' => 'Filosofi Teras adalah sebuah buku pengantar filsafat Stoa yang dibuat khusus sebagai panduan moral anak muda. Buku ini ditulis untuk menjawab permasalahan tentang tingkat kekhawatiran yang cukup tinggi dalam skala nasional, terutama yang dialami oleh anak muda.'],

            ['title' => 'The Psychology of Money','author' => 'Morgan Housel', 'year' => '2020','Synopsis' => 'Psychology of Money merupakan buku non-fiksi karya penulis Morgan Housel. Sejak dirilis pada 2020, Psychology of Money berhasil mencetak rekor penjualan terbaik di Amerika Serikat dan negara-negara lainnya.'],

            ['title' => 'Atomic Habits','author' => 'James Clear', 'year' => '2018','Synopsis' => 'Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain'],

           
        ];

        Books::insert($book);
    }
}
