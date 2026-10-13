<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'IT',
            'description' => 'Kategori Buku mengenai dunia IT'
        ]);

        Category::create([
            'name' => 'Finance',
            'description' => 'Kategori Buku mengenai dunia Finance'
        ]);

        Category::create([
            'name' => 'Foods',
            'description' => 'Kategori Buku mengenai dunia Foods'
        ]);
    }
}
