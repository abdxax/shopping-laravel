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
}
