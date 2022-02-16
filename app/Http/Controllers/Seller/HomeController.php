<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\proudct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("seller.home");
    }

    public function produect(){
        $prods=proudct::where("user_id",auth()->user()->id)->get();
        $dep=Department::all();
        $arr=["deps"=>$dep,"prods"=>$prods];
        return view("seller.produ",$arr);
    }
}
