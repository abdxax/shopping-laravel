<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
     return view("admin.home");
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
