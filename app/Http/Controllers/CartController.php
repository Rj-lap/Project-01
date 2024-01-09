<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\DbCart;
class CartController extends Controller
{
    function  AddCart(Request $req,$id){
        if($req->session()->has('buyer')){
            $s = $req->session()->get('buyer');
        }else{
            return redirect()->route('login');          
        }
        if($req->input('addcart')){
            $cart = new DbCart;
            
            $cart->products_id = $id;
            $cart->dbusers_id = $s->id;
            $cart->qnty = $req->input('qnty');
            $cart->save();

            return redirect()->route('cart');
        }
       

        // edit
       
         return view('AddCart');
    }
    function Cart(Request $req){
        if ($req->session()->get('buyer')) {
           $s= $req->session()->get('buyer');
        }
        $cart = DbCart::select('db_carts.id','products.product_name','products.product_price','products.product_image','db_carts.qnty')
        ->join('dbusers','dbusers.id','db_carts.dbusers_id')
        ->join('products','products.id','db_carts.products_id')
        ->where('db_carts.dbusers_id',$s->id)
        ->get();
        return view('Cart',compact('cart'));
    }           
    
     function Deletecart(Request $req,$id)
    {
        $cart = DbCart::find($id);
        $cart->delete($id);
        return redirect()->route('cart');
    }
    function pay(Request $req){
        if($req->session()->has('buyer')){
            $s = $req->session()->get('buyer');
        }else{
            return  redirect()->route('login');
        }
        $booking = new Booking;
        $booking->user_id = $s->id;
        $booking->transaction_id = $req->input('razorpay_payment_id');
        $booking->product_id = $req->input('product_id');
        $booking->price = $req->input('product_price');
        $booking->save();
     }   

}
