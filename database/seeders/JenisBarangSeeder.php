<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('jenisBarang')->insert([
            ['nama' => 'Mobil'],
            ['nama' => 'Motor'],
            ['nama' => 'Helikopter'],
        ]);
    }
}
