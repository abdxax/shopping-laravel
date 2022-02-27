<?php

namespace App\Http\Controllers;

use App\Models\BestSeller;
use App\Models\CarShopping;
use App\Models\Department;
use App\Models\Order;
use App\Models\proudct;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    public function index(Request $request){
       // Role::create(['name' => 'admin']);
       // Role::create(['name' => 'seller']);
       // Role::create(['name' => 'customer']);
        if($request->isMethod("post")){
            $item=$request->seItem;
            if($item==0){
                $prods=proudct::where("count",">",0)->get();
                $dep=Department::all();
                $arr=["prods"=>$prods,"dep"=>$dep];
                return view("home",$arr);
            }
            else{
                $prods=proudct::where("count",">",0)->where("dep_id",$item)->get();
                $dep=Department::all();
                $arr=["prods"=>$prods,"dep"=>$dep];
                return view("home",$arr);
            }
        }
        $dep=Department::all();
        $prods=proudct::where("count",">",0)->get();
        $best=BestSeller::all()->sortDesc();
        $arr=["prods"=>$prods,"dep"=>$dep,"best"=>$best];
        return view("home",$arr);
    }

    public function shows($id){
        $prod=proudct::find($id);
        return view("shows")->with("prod",$prod);
    }

    public function Market(){
        $dep=Department::all();
        $prods=proudct::where("count",">",0)->paginate(1);
        $arr=["prods"=>$prods,"dep"=>$dep];
        return view("market",$arr);
    }

    public function car(){
        $user=auth()->user();
        if($user==null){
            return redirect()->route("login");
        }
        $ord=Order::where("user_id",$user->id)->where("status","wait")->first();

        return  view("car")->with("ord",$ord);
    }

    public  function payOrder($id){
        $ord=Order::find($id);
        if($ord==null){
            return back();
        }
        $ord->status="payment";
        if($ord->save()){
            foreach ($ord->prods as $p){

                $prod_cou=proudct::find($p->prod_id);
                $p_count=$prod_cou->count;
                $res_co=$p_count-$p->count;
                if($res_co>=0){
                    $prod_cou->count=$res_co;
                    $prod_cou->save();
                }
                else{
                    $prod_cou->count=0;
                    $prod_cou->save();
                }
                $bs=BestSeller::where("prod_id",$p->prod_id)->first();
                if($bs==null){
                    $bs=new BestSeller();
                    $bs->prod_id=$p->prod_id;
                    $bs->countBuy=1;
                    if($bs->save()){

                    }
                }
                else{
                    $count =$bs->countBuy;
                    $bs->countBuy=++$count;
                    if($bs->save()){

                    }
                }
            }

            return  redirect()->route("review",$ord->id);
        }
    }

    public function addCar($id,Request $request){
        $user=auth()->user();
        if($user==null){
            return redirect()->route("login");
        }
        if($request->isMethod("post")){
            $ord=Order::where("user_id",$user->id)->where("status","wait")->first();
            if($ord==null){
                $ord=new Order();
                $ord->user_id=$user->id;
                $ord->status="wait";
                if($ord->save()){
                    $car=new CarShopping();
                    $car->oder_id=$ord->id;
                    $car->prod_id=$id;
                    $car->count=$request->prod_item;
                    if($car->save()){
                        return redirect("/");
                    }
                }
            }

            $car=new CarShopping();
            $car->oder_id=$ord->id;
            $car->prod_id=$id;
            $car->count=$request->prod_item;
            if($car->save()){

                return redirect("/");
            }
        }


    }

    public function register(Request  $request){
        if($request->isMethod("post")){
            $val=$request->validate([
                "FName"=>"required",
                "LName"=>"required",
                "UserName"=>"required",
                "Password"=>"required",
                "Email"=>"required|unique:users,email"
            ]);
            $user=new User();
            $user->fullName=$request->FName." ".$request->LName;
            $user->name=$request->UserName;
            $user->email=$request->Email;
            $user->password=bcrypt($request->Password);
            if($user->save()){
                $user->assignRole("customer");
                return redirect("/");
            }
            else{
                return "ss";
            }
        }
        return view("register");
    }

    public function registerSellr(Request $request){
        if($request->isMethod("post")){
           /* $val=$request->validate([
                "FName"=>"required",
                "LName"=>"required",
                "UserName"=>"required",
                "Password"=>"required",

            ]);*/
            $user=new User();
            $user->fullName=$request->FName." ".$request->LName;
            $user->name=$request->UserName;
            $user->email=$request->Email;
            $user->password=bcrypt($request->password);
            if($user->save()){
                $user->assignRole("seller");
                $login=["email"=>$user->email,"password"=>$request->password];
                if(auth()->attempt($login)){
                    return redirect()->route("seller.prod");
                }

            }
            else{
                return "ss";
            }
        }
        return view("sellerRegister");
    }


    public  function reviewOreder($id){
        $ord=Order::find($id);
        if($ord==null){
            return back();
        }
        return view("review")->with("ord",$ord);
    }
}
