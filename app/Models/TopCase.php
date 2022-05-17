<?php

namespace App\Models;

use App\Models\Build;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopCase extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function builds(){
        return $this->belongsTo(Build::class); 
    }
}
