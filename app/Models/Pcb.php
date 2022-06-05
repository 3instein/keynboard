<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcb extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function builds(){
        return $this->hasMany(Build::class);
    }
}
