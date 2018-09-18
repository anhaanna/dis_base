<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Mail;
use Illuminate\Http\Request;
use App\User_model;

class Admin extends Controller
{
    public function login(){
    	// dd('asdddda');
    	return view('signup');
    	// return redirect('admi');
    }
    public function login_load(Request $request){
    	$email    = $request->email;
    	$password = $request->password;
        $user     = User_model::where('email',$email)->get();
        if (empty($user[0]) || is_null($user) ) {
        	$user = User_model::where('name',$email)->get();
        }
        if ($user && !empty($user[0])) {
        	$hash_password = $user[0]->password;
        	// $ind = password_verify()
        	// if (password_verify($password, $hash_password)) {
        	if ($password == $hash_password) {
        		$allproducts = [];
        		return redirect('adminpanel');
        		// return redirect('adminpanel',['allproducts'=>$allproducts]);
        	}else{
        		return view('signup');
        	}	
        }else{
        	return view('signup');
        }

    	dd($_POST);
    	dd('asdasdasd');
    }
}
