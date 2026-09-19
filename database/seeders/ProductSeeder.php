<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $foodCategoryId = Category::where('name', 'Makanan')->value('id');

        $products = [
            'Indomie Goreng',
            'Indomie Soto',
            'Mie Sedaap Goreng',
            'Mie Sedaap Soto',
            'Beras Premium 5kg',
            'Gula Pasir 1kg',
            'Tepung Terigu 1kg',
            'Minyak Goreng 1L',
            'Garam Dapur 500g',
            'Kecap Manis  botol',
            'Saus Sambal',
            'Saus Tomat',
            'Sarden Kaleng',
            'Kornet Sapi',
            'Abon Sapi',
            'Telur Ayam 1kg',
            'Roti Tawar',
            'Roti Cokelat',
            'Biskuit Cokelat',
            'Biskuit Kelapa',
            'Wafer Cokelat',
            'Wafer Keju',
            'Keripik Kentang',
            'Keripik Singkong',
            'Kacang Atom',
            'Kacang Panggang',
            'Popcorn Caramel',
            'Permen Mint',
            'Cokelat Batang',
            'Selai Kacang',
            'Selai Stroberi',
            'Sereal Cokelat',
            'Oatmeal Instan',
            'Susu Bubuk Cokelat',
            'Susu Bubuk Vanila',
            'Keju Cheddar',
            'Mentega 200g',
            'Margarin 200g',
            'Yogurt Stroberi',
            'Nugget Ayam',
            'Sosis Ayam',
            'Bakso Sapi',
            'Daging Kornet',
            'Ikan Tuna Kaleng',
            'Bumbu Rendang',
            'Bumbu Nasi Goreng',
            'Kaldu Ayam',
            'Madu Murni',
            'Santan Instan',
            'Puding Cokelat',
        ];

        foreach ($products as $index => $name) {
            Product::updateOrCreate(
                ['sku' => sprintf('SKU-%03d', $index + 1)],
                [
                    'sku' => sprintf('SKU-%03d', $index + 1),
                    'name' => $name,
                    'price' => fake()->numberBetween(1000, 100000),
                    'stock' => fake()->numberBetween(1, 100),
                    'category_id' => $foodCategoryId,
                ],
            );
        }
    }
}