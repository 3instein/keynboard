<?php

namespace App\Models;

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

    public function topCase(){
        return $this->hasOne(TopCase::class);
    }
}
