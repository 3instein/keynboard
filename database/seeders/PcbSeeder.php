<?php

namespace Database\Seeders;

use App\Models\Pcb;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PcbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pcb::create([
            'code' => 'A',
            'name' => 'Hot-swap',
            'price' => '60',
        ]);

        Pcb::create([
            'code' => 'B',
            'name' => 'Soldered',
            'price' => '50',
        ]);
    }
}
