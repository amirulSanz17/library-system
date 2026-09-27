<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Awal untuk Buku
        Book::create([
            'title' => 'Buku Menjadi Data Scientist',
            'author' => 'Fahmi',
            'year' => '2010',
            'stock' => '10'
        ]);

        Book::create([
            'title' => 'Buku Menjadi Data Engineer',
            'author' => 'Tatang Sutarman',
            'year' => '2017',
            'stock' => '20'
        ]);

        Book::create([
            'title' => 'Buku Menjadi Fullstack Developer',
            'author' => 'Tito',
            'year' => '2009',
            'stock' => '7'
        ]);

        Book::create([
            'title' => 'Buku Menjadi Network Engineer',
            'author' => 'Suyatmi',
            'year' => '2013',
            'stock' => '5'
        ]);

        Book::create([
            'title' => 'Buku Menjadi Product Manager',
            'author' => 'Larasti',
            'year' => '2000',
            'stock' => '8'
        ]);
    }
}
