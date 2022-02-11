<?php

namespace App\Http\Controllers;

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
        return view("home");
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
            $user->password=bcrypt($request->Password);
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
