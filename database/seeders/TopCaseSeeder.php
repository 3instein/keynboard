<?php

namespace Database\Seeders;

use App\Models\TopCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopCaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $top_cases = [
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

        TopCase::insert($top_cases);
    }
}
