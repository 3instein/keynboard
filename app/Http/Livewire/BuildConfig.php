<?php

namespace App\Http\Livewire;

use App\Models\Pcb;
use App\Models\Build;
use App\Models\Plate;
use App\Models\Layout;
use App\Models\TopCase;
use Livewire\Component;
use App\Models\BottomCase;

class BuildConfig extends Component {
    public $top_case = 'Black - $100';
    public $bottom_case = 'Black - $100';
    public $plate_ = 'Aluminium - $20';
    public $pcb_ = 'Hot-swap - $60';
    public $prev_top = 1;
    public $prev_bot = 1;
    public $prev_plate = 1;
    public $prev_pcb = 1;
    public $total = 280;
    public $code = '';
    public $build;
    public $layout = 1;
    public $topCase = 1;
    public $bottomCase = 1;
    public $plate = 1;
    public $pcb = 1;

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

    public function updatedPlate() {
        $plate = Plate::find($this->plate);
        $prev_plate_price = Plate::find($this->prev_plate)->price;
        $this->plate_ = $plate->name . ' - $' . $plate->price;
        $this->total = $this->total - $prev_plate_price + $plate->price;
        $this->prev_plate = $plate->id;
    }

    public function updatedPcb() {
        $pcb = Pcb::find($this->pcb);
        $prev_pcb_price = Pcb::find($this->prev_pcb)->price;
        $this->pcb_ = $pcb->name . ' - $' . $pcb->price;
        $this->total = $this->total - $prev_pcb_price + $pcb->price;
        $this->prev_pcb = $pcb->id;
    }
    public function getTopCasesProperty() {
        return TopCase::all();
    }

    public function getBottomCasesProperty() {
        return BottomCase::all();
    }

    public function getLayoutsProperty() {
        return Layout::all();
    }

    public function getPlatesProperty() {
        return Plate::all();
    }

    public function getPcbsProperty() {
        return Pcb::all();
    }

    public function getTotalProperty() {
        return $this->total;
    }

    public function getBuild() {
        $this->build = Build::where('code', $this->code)->first();
        $top_case = TopCase::find($this->build->top_case->id);
        $this->top_case = $top_case->name . ' - $' . $top_case->price;
        $this->topCase = $this->build->top_case->id;
        $this->prev_top = $top_case->id;
        $bottom_case = BottomCase::find($this->build->bottom_case->id);
        $this->bottom_case = $bottom_case->name . ' - $' . $bottom_case->price;
        $this->bottomCase = $this->build->bottom_case->id;
        $this->prev_bot = $bottom_case->id;
        $plate = Plate::find($this->build->plate->id);
        $this->plate_ = $plate->name . ' - $' . $plate->price;
        $this->plate = $this->build->plate->id;
        $this->prev_plate = $plate->id;
        $pcb = Pcb::find($this->build->pcb->id);
        $this->pcb_ = $pcb->name . ' - $' . $pcb->price;
        $this->pcb = $this->build->pcb->id;
        $this->prev_pcb = $pcb->id;
        $prev_top_price = TopCase::find($this->prev_top)->price;
        $prev_bot_price = BottomCase::find($this->prev_bot)->price;
        $prev_plate_price = Plate::find($this->prev_plate)->price;
        $prev_pcb_price = Pcb::find($this->prev_pcb)->price;
        $this->total = $this->total - $prev_top_price - $prev_bot_price - $prev_plate_price - $prev_pcb_price + $top_case->price + $bottom_case->price + $plate->price + $pcb->price;
        $this->emit('topCaseChanged', $this->topCase);
        $this->emit('bottomCaseChanged', $this->bottomCase);
    }

    public function render() {
        return view('livewire.build-config');
    }
}
