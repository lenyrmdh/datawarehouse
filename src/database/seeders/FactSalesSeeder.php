<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FactSales;
use App\Models\DimDate;
use App\Models\DimProduct;
use App\Models\DimCustomer;
use App\Models\DimStore;
use App\Models\DimStaff;

class FactSalesSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $product = DimProduct::inRandomOrder()->first();
            $qty = rand(1, 5);

            FactSales::create([
                'date_id' => DimDate::inRandomOrder()->first()->id,
                'product_id' => $product->id,
                'customer_id' => DimCustomer::inRandomOrder()->first()->id,
                'store_id' => DimStore::inRandomOrder()->first()->id,
                'staff_id' => DimStaff::inRandomOrder()->first()->id,
                'quantity_sold' => $qty,
                'total_price' => $product->unit_price * $qty,
            ]);
        }
    }
}
