<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Member::create([
            'name' => 'Amirul Ichsandina',
            'email' => 'amirulsanz17@gmail.com',
            'address' => 'Karawang',
        ]);

        Member::create([
            'name' => 'Ahmad Fahmi Hidayat',
            'email' => 'fahmi.hidayat@gmail.com',
            'address' => 'Jakarta',
        ]);

        Member::create([
            'name' => 'Rama Wahyu Nugraha',
            'email' => 'ramawahyu@gmail.com',
            'address' => 'Karawang',
        ]);
    }
}
