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
        $top_case = TopCase::find(1);
        $bottom_case = BottomCase::find(1);
        $layout = Layout::find(1);

        $code = $layout->code . $top_case->code . $bottom_case->code;

        Build::create([
            'code' => $code,
            'top_case_id' => 1,
            'bottom_case_id' => 1,
            'layout_id' => 1
        ]);
    }
}
