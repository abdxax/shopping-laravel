<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarShopping extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsTo(Order::class,"oder_id");
    }

    public function prod(){
        return $this->belongsTo(proudct::class,"prod_id");
    }
}
