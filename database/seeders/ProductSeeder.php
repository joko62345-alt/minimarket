<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Indomie Goreng',
            'price' => 3000,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Aqua',
            'price' => 4000,
            'stock' => 15,
        ]);
    }
}