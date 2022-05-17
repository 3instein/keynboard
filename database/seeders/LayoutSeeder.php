<?php

namespace Database\Seeders;

use App\Models\Layout;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layouts = [
            [
                'code' => 'V0',
                'name' => 'WKL',
                'price' => 20  
            ],
            [
                'code' => 'V1',
                'name' => 'WK',
                'price' => 20
            ]
        ];

        Layout::insert($layouts);
    }
}
