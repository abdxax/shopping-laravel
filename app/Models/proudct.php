<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proudct extends Model
{
    use HasFactory;

    public function imges(){
        return $this->hasMany(ImgPrd::class,"prod_id");
    }

    public function Car(){
        return $this->hasMany(CarShopping::class,"prod_id");
    }

    public function bestSeller(){
        return $this->hasOne(BestSeller::class,"prod_id");
    }

    public function Images(){
        return $this->hasMany(ImagesProc::class,"prod_id");
    }
}
