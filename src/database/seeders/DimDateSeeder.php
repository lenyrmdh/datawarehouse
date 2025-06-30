<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimDate;
use Carbon\Carbon;

class DimDateSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            $date = Carbon::today()->subDays($i);

            DimDate::updateOrCreate([
                'id' => $date->format('Ymd'),
            ], [
                'day' => $date->day,
                'month' => $date->month,
                'month_name' => $date->format('F'),
                'quarter' => ceil($date->month / 3),
                'year' => $date->year,
                'day_name' => $date->format('l'),
                'is_weekend' => $date->isWeekend(),
            ]);
        }
    }
}
