<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            [
                'name' => 'PT Sumber Makmur',
                'phone' => '081234567890',
                'address' => 'Jl. Diponegoro No. 10, Jember',
            ],
            [
                'name' => 'CV Maju Bersama',
                'phone' => '082345678901',
                'address' => 'Jl. Kalimantan No. 25, Jember',
            ],
            [
                'name' => 'UD Sejahtera',
                'phone' => '083456789012',
                'address' => 'Jl. Jawa No. 15, Jember',
            ],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('suppliers')->updateOrInsert(
                ['name' => $supplier['name']],
                $supplier,
            );
        }
    }
}