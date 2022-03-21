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
        $prod=count(proudct::where("user_id",auth()->user()->id)->get());
        return view("seller.home")->with("prod",$prod);
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
            $fileName = time().'_'.$request->img[0]->getClientOriginalName();
            $path = $request->img[0]->storeAs("Proudct",$fileName,"public");
            if($prod->save()){
                foreach ( $request->img as $im){
                    $fileName2 = time().'_'.$im->getClientOriginalName();
                    $path2 = $im->storeAs("Proudct",$fileName2,"public");
                    $im=new ImgPrd();
                    $im->prod_id=$prod->id;
                    $im->imgPath=$path2;
                    $im->save();
                }


                    return back();

            }

        }
        $prods=proudct::where("user_id",auth()->user()->id)->get();
        $dep=Department::all();
        $arr=["deps"=>$dep,"prods"=>$prods];
        return view("seller.produ",$arr);
    }

    public function updateProd(Request $request){
        $prod=proudct::find($request->proc_id);
        $prod->title=$request->title;
        $prod->descrip=$request->desc;
        $prod->price=$request->price;
        $prod->count=$request->count;
        if($prod->save()){
            return back();
        }
    }

    public function showProd($id){
        $prod=proudct::find($id);
        if($prod->user_id!=auth()->user()->id){
            return back();
        }
        return view("seller.showProd")->with("prod",$prod);
    }
}
