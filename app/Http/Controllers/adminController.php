<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use\App\Models\User;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    function login(){
//    echo Hash::make('shihab123');
//    exit();
  
        return view('admin.login');
    }

    public function makeLogin(Request $req){
	    
	  $user= User::where(['email'=>$req->email])->first();
   $role=$user->role;

     if($role=="admin"){
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return back()->withErrors(['message'=>'invalid email or password']);
        }else{
            $req->session()->put('admin',$user);
           echo $req->session()->get('admin');

           return redirect('/admin/deshboard');
	    }
     }
else{
    return back()->withErrors(['message'=>'invalid email or password']);
}
    
       
  	}

      function deshboard(){

        return view('admin.deshboard');
      }

      function logout(Request $req){

        $req->session()->forget('admin');
        return redirect()->route('admin.makeLogin');
      }
}
