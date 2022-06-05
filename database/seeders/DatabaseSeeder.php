<?php

namespace Database\Seeders;

use Database\Seeders\PcbSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LayoutSeeder;
use Database\Seeders\TopCaseSeeder;
use Database\Seeders\BottomCaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            TopCaseSeeder::class,
            BottomCaseSeeder::class,
            LayoutSeeder::class,
            PlateSeeder::class,
            PcbSeeder::class,
            BuildSeeder::class,
        ]);
    }
}
