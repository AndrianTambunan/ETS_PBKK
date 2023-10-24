<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KondisiBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('kondisiBarang')->insert([
            ['kondisi' => 'Baik'],
            ['kondisi' => 'Layak'],
            ['kondisi' => 'Rusak'],
        ]);
    }
}
