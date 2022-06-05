<?php

namespace Database\Seeders;

use App\Models\Plate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plate::create([
            'code' => 'A',
            'name' => 'Aluminium',
            'price' => '20',
        ]);

        Plate::create([
            'code' => 'B',
            'name' => 'FR4',
            'price' => '30',
        ]);

        Plate::create([
            'code' => 'C',
            'name' => 'Polycarbonate',
            'price' => '25',
        ]);
    }
}
