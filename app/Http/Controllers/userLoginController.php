<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;

class userLoginController extends Controller
{
    
public function userauth(Request $res){

$email=$res->input("email");
$password=$res->input("password");

$query=DB::table("users")
->where("email",$email)
->where("password",$password)
->get();

 if(isset($query[0]->id)){
 return redirect('/admin');
 }else

 $res->session()->flash("msg","Please Enter Correct Login Details");
 return redirect("/");

}

}
