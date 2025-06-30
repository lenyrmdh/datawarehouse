<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimCustomer;
use Carbon\Carbon;

class DimCustomerSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DimCustomer::create([
                'name' => "Customer $i",
                'gender' => ['male', 'female'][rand(0, 1)],
                'age_group' => ['Teen', 'Adult', 'Senior'][rand(0, 2)],
                'city' => ['Jakarta', 'Bandung', 'Surabaya'][rand(0, 2)],
                'join_date' => Carbon::today()->subDays(rand(1, 100)),
            ]);
        }
    }
}
