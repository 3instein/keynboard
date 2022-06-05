<?php

namespace App\Models;

use App\Models\Plate;
use App\Models\TopCase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Build extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function getRouteKeyName(){
        return 'code';
    }

    public function top_case(){
        return $this->belongsTo(TopCase::class);
    }

    public function bottom_case(){
        return $this->belongsTo(BottomCase::class);
    }

    public function plate(){
        return $this->belongsTo(Plate::class);
    }

    public function pcb(){
        return $this->belongsTo(Pcb::class);
    }

    public function layout(){
        return $this->belongsTo(Layout::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
