<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    function index(){
     $users=User::where('role','=','user')->get();
        return view('admin.user.index',compact('users'));
    
    }
    function delete(Request $request){
    	$id = $request->id;
    	$user = User::find($id);
    	$user->delete();
        return response()->json('success');

    }
}
