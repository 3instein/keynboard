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
                'price' => 100
            ],
            [
                'code' => 'B',
                'name' => 'White (Frosted)',
                'price' => 100
            ],
            [
                'code' => 'C',
                'name' => 'Navy',
                'price' => 100
            ],
            [
                'code' => 'D',
                'name' => 'Silver',
                'price' => 100
            ],
        ];

        BottomCase::insert($bottom_cases);
    }
}
