<?php

namespace Database\Seeders;

use App\Models\TopCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TopCase::create([
            'code' => 'A',
            'name' => 'Black',
            'price' => 100  
        ]);
    }
}
