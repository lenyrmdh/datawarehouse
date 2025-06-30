<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimStaff;

class DimStaffSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 5) as $i) {
            DimStaff::create([
                'name' => "Staff $i",
                'role' => ['Sales', 'Admin', 'Support'][rand(0, 2)],
                'branch' => ['Jakarta', 'Bandung', 'Online'][rand(0, 2)],
            ]);
        }
    }
}
