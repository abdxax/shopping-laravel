<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\ImgPrd;
use App\Models\proudct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("seller.home");
    }

    public function produect(Request  $request){
        if($request->isMethod("post")){
            $prod=new proudct();
            $prod->title=$request->title;
            $prod->descrip=$request->desc;
            $prod->price=$request->price;
            $prod->count=$request->count;
            $prod->user_id=auth()->user()->id;
            $prod->dep_id=$request->dep;

           if(!$request->hasFile("img")){
               return back();
           }
            $fileName = time().'_'.$request->img->getClientOriginalName();
            $path = $request->file('img')->storeAs("Proudct",$fileName,"public");
            if($prod->save()){
                $im=new ImgPrd();
                $im->prod_id=$prod->id;
                $im->imgPath=$path;
                if($im->save()){
                    return back();
                }
            }

        }
        $prods=proudct::where("user_id",auth()->user()->id)->get();
        $dep=Department::all();
        $arr=["deps"=>$dep,"prods"=>$prods];
        return view("seller.produ",$arr);
    }

    public function showProd($id){
        $prod=proudct::find($id);
        if($prod->user_id!=auth()->user()->id){
            return back();
        }
        return view("seller.showProd")->with("prod",$prod);
    }
}
