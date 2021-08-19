<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use Session;
use Hash;

class BaseController extends Controller
{
   public function home(){

    $products = Product::get();
    $new_products = Product::limit(15)->latest()->get();
     return view('front.home',compact('products','new_products'));
     
    }
    
    public function specialoffer(){
        return view('front.specialoffer');
    }
    
    public function delivery(){
        return view('front.delivery');
    }
    
    public function contact(){
        return view('front.contact');
    }
    static function cartItem(){

        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    public function cart(Request $request){

        $carts = [];
        if(Session()->has('user')){
            $user_id=$request->Session()->get('user')['id'];
            $carts =Cart::where('user_id',$user_id)->get();
            $cartCount=Cart::count();
        }
 
        return view('front.cart',compact('carts','cartCount'));
    }
    public function productdetails(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->with('ProductDetail')->first();
        $category_id = $product->category_id;
        $related_products = Product::where('category_id',$category_id)->get();
        return view('front.productdetails',compact('product','related_products'));
    }
    public function user_login(){

        return view('front.login');
    }
    function user_registration(Request $request){
        $data = array(
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user'
         );
   
         $user = User::create($data);
         return redirect()->route('user.login');

    }

    function login_check(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        $role=$user->role;
      
          if($role=="user"){
             if(!$user || !Hash::check($req->password,$user->password))
             {
                 return back()->withErrors(['message'=>'invalid email or password']);
             }else{
                 $req->session()->put('user',$user);
     
                return redirect('/');
             }
          }
     else{
         return back()->withErrors(['message'=>'invalid email or password']);
     }

    }

    function user_logout(Request $req){

        $req->session()->forget('user');
        return redirect()->route('user.login');
    }
    static function sidebarCategory(){
        $categories = Category::whereNull('category_id')->get();
        return $categories;
     }
     static function subcatagory(){
        $sub = Category::whereNotNull('category_id')->get();
        return $sub;
     }

     static function productCount(){
       
        $product=Product::all();
        return $product;
     }
}
