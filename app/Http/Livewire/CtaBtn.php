<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Analytic;
use Illuminate\Support\Facades\DB;

class CtaBtn extends Component
{
    public $count = 0;
    
    public function count(){
        Analytic::where('id', 1)->update(['cta_counter' => DB::raw('cta_counter+1')]);
        return redirect()->route('build.index');
    }

    public function render()
    {
        return view('livewire.cta-btn');
    }
}
