<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesProc extends Model
{
    use HasFactory;
    public function proudct(){
        return $this->belongsTo(proudct::class,"prod_id");
    }
}
