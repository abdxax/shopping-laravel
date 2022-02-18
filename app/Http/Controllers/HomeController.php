<?php

namespace App\Http\Controllers;

use App\Models\CarShopping;
use App\Models\Order;
use App\Models\proudct;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    public function index(){
      //  Role::create(['name' => 'admin']);
       // Role::create(['name' => 'seller']);
       // Role::create(['name' => 'customer']);
        $prods=proudct::where("count",">",0)->get();
        return view("home")->with("prods",$prods);
    }

    public function shows($id){
        $prod=proudct::find($id);
        return view("shows")->with("prod",$prod);
    }

    public function car(){
        $user=auth()->user();
        if($user==null){
            return redirect()->route("login");
        }
        $ord=Order::where("user_id",$user->id)->where("status","wait")->first();

        return  view("car")->with("ord",$ord);
    }

    public function addCar($id){
        $user=auth()->user();
        if($user==null){
            return redirect()->route("login");
        }
        $ord=Order::where("user_id",$user->id)->where("status","wait")->first();
        if($ord==null){
            $ord=new Order();
            $ord->user_id=$user->id;
            $ord->status="wait";
            if($ord->save()){
                $car=new CarShopping();
                $car->oder_id=$ord->id;
                $car->prod_id=$id;
                if($car->save()){
                    return redirect("/");
                }
            }
        }

        $car=new CarShopping();
        $car->oder_id=$ord->id;
        $car->prod_id=$id;
        if($car->save()){
            return redirect("/");
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
                return back()->with("suc","تم انشاء الحساب بنجاح ");
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
                return back()->with("suc","تم انشاء الحساب بنجاح ");
            }
            else{
                return "ss";
            }
        }
        return view("sellerRegister");
    }
}
