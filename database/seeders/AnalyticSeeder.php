<?php

namespace Database\Seeders;

use App\Models\Analytic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnalyticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Analytic::create([
            'cta_counter' => 0
        ]);
    }
}
