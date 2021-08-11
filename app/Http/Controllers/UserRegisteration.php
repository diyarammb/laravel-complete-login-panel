<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserRegisteration extends Controller
{
     
    public function Registeration(request $res){

$data=[
"name"=>$res->input("name"),
"email"=>$res->input("email"),
"email_verified_at" => $res->input('inactive'),
"password"=> bcrypt($res->input("password")),
"remember_token"=>bin2hex(random_bytes(15)),
"created_at"=>NOW(),
 ];
   
$DataIn=DB::table("users")->insert($data);
if($DataIn){ 
    return view("register");
}

}
}
