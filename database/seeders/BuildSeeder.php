<?php

namespace Database\Seeders;

use App\Models\Pcb;
use App\Models\Build;
use App\Models\Plate;
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
        $top_cases = TopCase::all();
        $bottom_cases = BottomCase::all();
        $layouts = Layout::all();
        $plates = Plate::all();
        $pcbs = Pcb::all();

        foreach($top_cases as $top_case){
            foreach($bottom_cases as $bottom_case){
                foreach($layouts as $layout){
                    foreach($plates as $plate){
                        foreach($pcbs as $pcb){
                            $code = $layout->code . 
                                    $top_case->code . 
                                    $bottom_case->code . 
                                    $plate->code . 
                                    $pcb->code;
                            Build::create([
                                'code' => $code,
                                'top_case_id' => $top_case->id,
                                'bottom_case_id' => $bottom_case->id,
                                'layout_id' => $layout->id,
                                'plate_id' => $plate->id,
                                'pcb_id' => $pcb->id
                            ]);
                        }
                    }
                }
            }
        }
    }
}
