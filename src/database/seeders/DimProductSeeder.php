<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimProduct;

class DimProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Sabun Wajah', 'category' => 'Perawatan Wajah', 'brand' => 'Raelni', 'unit_price' => 25000],
            ['name' => 'Toner', 'category' => 'Perawatan Kulit', 'brand' => 'Raelni', 'unit_price' => 30000],
            ['name' => 'Serum Vitamin C', 'category' => 'Perawatan Wajah', 'brand' => 'Raelni', 'unit_price' => 45000],
        ];

        foreach ($products as $product) {
            DimProduct::create($product);
        }
    }
}
