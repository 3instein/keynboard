<?php

namespace App\Http\Livewire;

use App\Models\Layout;
use App\Models\TopCase;
use Livewire\Component;
use App\Models\BottomCase;
use App\Models\Build;

class BuildConfig extends Component {
    public $top_case = 'Black - $100';
    public $prev_top = 1;
    public $bottom_case = 'Black - $100';
    public $prev_bot = 1;
    public $total = 200;
    public $code = '';
    public $build;
    public $layout = 1;
    public $topCase = 1;
    public $bottomCase = 1;

    public function updatedTopCase() {
        $this->emit('topCaseChanged', $this->topCase);
        $top_case = TopCase::find($this->topCase);
        $prev_top_price = TopCase::find($this->prev_top)->price;
        $this->top_case = $top_case->name . ' - $' . $top_case->price;
        $this->total = $this->total - $prev_top_price + $top_case->price;
        $this->prev_top = $top_case->id;
    }

    public function updatedBottomCase() {
        $this->emit('bottomCaseChanged', $this->bottomCase);
        $bottom_case = BottomCase::find($this->bottomCase);
        $prev_bot_price = BottomCase::find($this->prev_bot)->price;
        $this->bottom_case = $bottom_case->name . ' - $' . $bottom_case->price;
        $this->total = $this->total - $prev_bot_price + $bottom_case->price;
        $this->prev_bot = $bottom_case->id;
    }

    public function getTopCasesProperty() {
        return TopCase::all();
    }

    public function getBottomCasesProperty() {
        return BottomCase::all();
    }

    public function getLayoutsProperty(){
        return Layout::all();
    }

    public function getTotalProperty() {
        return $this->total;
    }

    public function getBuild() {
        $this->build = Build::where('code', $this->code)->first();
        $top_case = TopCase::find($this->build->top_case->id);
        $bottom_case = BottomCase::find($this->build->bottom_case->id);
        $prev_top_price = TopCase::find($this->prev_top)->price;
        $prev_bot_price = BottomCase::find($this->prev_bot)->price;
        $this->top_case = $top_case->name . ' - $' . $top_case->price;
        $this->topCase = $this->build->top_case->id;
        $this->bottom_case = $bottom_case->name . ' - $' . $bottom_case->price;
        $this->bottomCase = $this->build->bottom_case->id;
        $this->total = $this->total - $prev_top_price - $prev_bot_price + $top_case->price + $bottom_case->price;
        $this->prev_top = $top_case->id;
        $this->prev_bot = $bottom_case->id;
        $this->emit('topCaseChanged', $this->topCase);
        $this->emit('bottomCaseChanged', $this->bottomCase);
    }

    public function render() {

        return view('livewire.build-config');
    }
}
