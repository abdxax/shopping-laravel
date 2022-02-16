<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgPrd extends Model
{
    use HasFactory;
    public function produ(){
        return $this->belongsTo(proudct::class,"prod_id");
    }
}
