<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Order;
use App\Models\proudct;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $dep=count(Department::all());
        $prod=count(proudct::all());
        $user=count(User::all());
        $order=count(Order::where("status","payment")->get());
        $arr=["dep"=>$dep,"prod"=>$prod,"user"=>$user,"order"=>$order];
     return view("admin.home",$arr);
    }

    public function Department(Request $request){
        if($request->isMethod("post")){
            $d=new Department();
            $d->title=$request->depa;
            if($d->save()){
                return back()->with("suc","تم اضافة القسم بنجاح ");
            }
        }
        $dep=Department::all();
        return view("admin.department")->with("dep",$dep);
    }
}
