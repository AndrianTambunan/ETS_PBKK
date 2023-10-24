<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::factory(10)->create();

        Product::create([
            'keterangan' => 'Cincin harga murah dengan kualitas terjamin',
            'kecacatan' => 'Baik',
            'jumlah' => 10,
            'image' => 'ubs-gold-product-4.jpg',
        ]);
    }
}
