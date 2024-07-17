<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Produk Contoh',
            'description' => 'Ini adalah produk contoh.',
            'price' => 19.99,
        ]);
    }
}

    {
        //
    }

