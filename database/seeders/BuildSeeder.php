<?php

namespace Database\Seeders;

use App\Models\Build;
use App\Models\Layout;
use App\Models\TopCase;
use App\Models\BottomCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $top_case = TopCase::create([
            'code' => 'A',
            'name' => 'black',
            'price' => 100  
        ]);

        $bottom_case = BottomCase::create([
            'code' => 'A',
            'name' => 'black',
            'price' => 100  
        ]);

        $layout = Layout::create([
            'code' => 'V0',
            'name' => 'wkl-tkl',
            'price' => 20  
        ]);

        $code = $layout->code . $top_case->code . $bottom_case->code;

        Build::create([
            'code' => $code,
            'top_case_id' => 1,
            'bottom_case_id' => 1,
            'layout_id' => 1
        ]);
    }
}
