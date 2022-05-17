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
        Layout::create([
            'code' => 'V0',
            'name' => 'WKL',
            'price' => 20  
        ]);
    }
}
