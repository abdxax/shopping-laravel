<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request  $request){
        if($request->isMethod("post")){
            $arr=["email"=>$request->email,"password"=>$request->Password];
            if(auth()->attempt($arr)){
                if(auth()->user()->hasRole("admin")){
                    return redirect()->route("admin.Home");
                }
                elseif (auth()->user()->hasRole("seller")){

                    return redirect()->route("seller.home");
                }
                elseif (auth()->user()->hasRole("customer")){
                    return redirect()->route("home");
                }
                else{
                      return "s";
                }
            }
            else{
                return "dw";
            }
        }
        return view("login");
    }

    public function logout(){
        auth()->logout();
        return redirect("/");
    }
}
