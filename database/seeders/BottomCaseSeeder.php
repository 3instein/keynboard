<?php

namespace Database\Seeders;

use App\Models\BottomCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BottomCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BottomCase::create([
            'code' => 'A',
            'name' => 'Black',
            'price' => 100  
        ]);
    }
}
