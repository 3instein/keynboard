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

        TopCase::insert($top_cases);
    }
}
