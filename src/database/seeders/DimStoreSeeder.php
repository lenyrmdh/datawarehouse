<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimStore;

class DimStoreSeeder extends Seeder
{
    public function run(): void
    {
        $stores = ['Online', 'Toko Utama', 'Reseller A'];

        foreach ($stores as $store) {
            DimStore::create([
                'store_name' => $store,
                'region' => ['Jawa', 'Sumatera', 'Bali'][rand(0, 2)],
                'channel' => ['Online', 'Offline'][rand(0, 1)],
            ]);
        }
    }
}

