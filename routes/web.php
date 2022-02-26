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
Route::post('/',"HomeController@index");
Route::get("register","HomeController@register")->name("register");
Route::post("register","HomeController@register");
Route::get("sellerRegister","HomeController@registerSellr")->name("registerSeller");
Route::post("sellerRegister","HomeController@registerSellr");
Route::get("login","LoginController@login")->name("login");
Route::post("login","LoginController@login");
Route::get("logout","LoginController@logout")->name("logout");
Route::get("show/{id}","HomeController@shows")->name("shows");
Route::post("car/{id}","HomeController@addCar")->name("car");
Route::get("pay/{id}","HomeController@payOrder")->name("payment");
Route::get("showCar","HomeController@car")->name("showCar");
Route::get("market","HomeController@market")->name("market");
Route::post("market","HomeController@market");

Route::prefix("admin")->group(function (){
    Route::get("Home","Admin\HomeController@Index")->name("admin.Home");
    Route::get("depart","Admin\HomeController@Department")->name("admin.depart");
    Route::post("depart","Admin\HomeController@Department");
});

Route::prefix("seller")->group(function (){
    Route::get("Home","Seller\HomeController@index")->name("seller.home");
    Route::get("proudects","Seller\HomeController@produect")->name("seller.prod");
    Route::post("proudects","Seller\HomeController@produect");
    Route::get("showprod/{id}","Seller\HomeController@showProd")->name("seller.show");
});
