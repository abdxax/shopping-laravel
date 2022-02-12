<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"HomeController@index")->name("home");
Route::get("register","HomeController@register")->name("register");
Route::post("register","HomeController@register");
Route::get("sellerRegister","HomeController@registerSellr")->name("registerSeller");
Route::post("sellerRegister","HomeController@registerSellr");
Route::get("login","LoginController@login")->name("login");
Route::post("login","LoginController@login");

Route::prefix("admin")->group(function (){
    Route::get("Home","Admin\HomeController@Index")->name("admin.Home");
});
