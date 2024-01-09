<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use App\Models\Dbuser;
use App\Models\Categroy;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Booking;
use App\Models\contact;

class HomeController extends Controller
{
    function Home(){
        $brand = Brand::all();
        $categroy = categroy::all();
        // $product = Product::all();
          $product = Product::select('products.id','products.product_name','products.product_price','products.product_description','products.product_image','categroys.category_name','brands.brand_name')
         ->join('categroys','categroys.id','products.cat_id')
         ->join('brands','brands.id','products.brand_id')
         ->get();

      return view('Home',compact('brand','categroy','product'));
    }
      function About(){
      return view('About');
    }
      function Contact(Request $req){
      $contact = new contact;
       if ($req->input('submit')) {
            $contact->name = $req->input('cname');
            $contact->email = $req->input('cemail');
            $contact->subject = $req->input('csubject');
            $contact->massage = $req->input('cmessage');
            $contact->save();   

        return view('contact');
    }
    return view('contact');
    }
    // LOGIN
     function Login(Request $req){
        if ($req->input('login')) {
               $email = $req->input('email');
               $user = dbuser::where('email',$email)->first();
           if($user){
                if (Hash::check($req->password,$user->password)) {
                    if ($user->role_id == 1) {
                        $req->session()->put('admin', $user);
                        return redirect()->route('admin');
                    }else{
                          $req->session()->put('buyer', $user);
                        return redirect()->route('home');
                    }
                }else{
                    echo "not match";
                }
           }else{
            echo "not exit";
           }
        }
      return view('Login');
    }
    // LOGIN END
    // SIGNUp
      function Signup(Request $req){
      $user = new dbuser;

      if ($req->input('signup')) {
                    $validatedData = $req->validate([
                    'name' => 'required',
                    'email' => 'required|unique:dbusers',
                    'passwd' => 'required',
                    'role_id' => 'required',
                     
                ]);
          if ($req->has('home_ima')) {
                    $image = $req->file('home_ima');
                     $filename = $image->getClientOriginalName();
                     $path = 'UserLogin/';
                     $image->move($path,$filename);
                     $user->profile = $filename;
        }
                  
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->passwd);
        $user->role_id = $req->input('role_id');

        $user->save();
            return redirect()->route('login');
      }
      return view('Signup');
    }
    // SIGNUP END
     function Logout(Request $req){
        if ($req->session()->has('buyer')) {
            $req->session()->forget('buyer');
            return redirect()->route('home');            
        }elseif($req->session()->has('admin')) {
            $req->session()->forget('admin');
            return redirect()->route('login');            
        }
        
    }
    
    function Filter(Request $req){


        $filter = [];
         $filter = $_GET;

         // return $filter['cat'];


        $brand = $req->input('brand');
         $categroy = $req->input('cat');
         
         $product = Product::select('products.id','products.product_name','products.product_price','products.product_description','products.product_image','categroys.category_name','brands.brand_name')
            ->join('categroys','categroys.id','products.cat_id')
            ->join('brands','brands.id','products.brand_id');
            if(isset($brand)){
                 $product->whereIn('brands.brand_name',$filter['brand']);    
             }
            if(isset($categroy)){
               $product->whereIn('categroys.category_name',$filter['cat']);
            }
           
     $product = $product->get();

    //return $product;
    return view('filter_data',compact('product'));
    }




    
  
//MYprofile
  function Myprofile(Request $req){
    if($req->session()->has('buyer')){
        $s = $req->session()->get('buyer');
    }
     $user =Dbuser::select('dbusers.id','dbusers.name','dbusers.email','dbusers.password','dbusers.profile')
      ->where('dbusers.id',$s->id)
       ->get();
       return view('Myprofile',compact('user'));
             
   }

  
  function OurService(){
    return view('OurService');
  }
    
}
