<?php

namespace App\Models;

use App\Models\Build;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function build(){
        return $this->belongsTo(Build::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
