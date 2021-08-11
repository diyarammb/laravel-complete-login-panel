<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userLoginController;
use App\Http\Controllers\UserRegisteration;

 
Route::get('/', function () {
    return view('login');
});


Route::view("/admin","admin/dashboard");  
Route::view("/form","admin/form");  
Route::view("/table","admin/table");  
Route::view("/inbox","admin/inbox");  
Route::post("userLogin",[userLoginController::class,"userauth"]);
Route::post("UserRegisteration",[UserRegisteration::class,"Registeration"]);
Route::view("register","register");
 