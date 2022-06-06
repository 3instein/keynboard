<?php

namespace Database\Seeders;

use App\Models\BottomCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BottomCaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $bottom_cases = [
            [
                'code' => 'A',
                'name' => 'Black',
                'price' => 1000000
            ],
            [
                'code' => 'B',
                'name' => 'White (Frosted)',
                'price' => 1200000
            ],
            [
                'code' => 'C',
                'name' => 'Navy',
                'price' => 1100000
            ],
            [
                'code' => 'D',
                'name' => 'Silver',
                'price' => 1100000
            ],
        ];

        BottomCase::insert($bottom_cases);
    }
}
