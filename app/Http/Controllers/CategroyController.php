<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categroy;
// use App\Models\Brand;
// use App\Models\Product;
class CategroyController extends Controller
{
       function AddCategory(Request $req)
    {
         $categroy = new Categroy;
         if($req->input('add_cat')){

           $categroy->category_name = $req->input('categroy_name'); 

          $categroy->save();
           return view('Admin.Addcategory',compact('categroy'));
        }
      
         if ($req->segment(3)) {
            $eid = $req->segment(3);
            $categroy = Categroy::where('id',$eid)->first();
        }
        if ($req->input('update_cat')) {
            $categroy = Categroy::find($eid);
             $categroy->category_name = $req->input('categroy_name');
           $categroy->save();
        }
    
       
      return view('Admin.AddCategory',compact('categroy'));
    }
    
    
       function ViewCategroy(Request $req)
    {
       $categroy = Categroy::all();
       // $product = Product::all();
    	return view('Admin.ViewCategroy',compact('categroy'));
    }
    // public function 
      public function DeleteCategroy(Request $req,$id)
    {
        $categroy = Categroy::find($id);
        $categroy->delete();
        return redirect()->route('viewcategory');
    }
 }  

   

