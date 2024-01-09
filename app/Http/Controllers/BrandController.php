<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;
class BrandController extends Controller
{
    public function AddBrand(Request $req){

    	$brand = new Brand;
    	if($req->input('add_bnd'))
    	{
    		$brand->brand_name = $req->input('brand_name');
    		$brand->save();
             return view('Admin.AddBrand',compact('brand'));
    	}
    	

        if ($req->segment(3)) {
            $eid = $req->segment(3);
            $brand = Brand::where('id',$eid)->first();
        }
        if ($req->input('update_bnd')) {
            $brand = Brand::find($eid);
             $brand->brand_name = $req->input('brand_name');
           $brand->save();
        }
    
       
      return view('Admin.AddBrand',compact('brand'));
    	}
    
   
    public function ViewBrand(Request $req){
     	$brand = Brand::all();
    	 return view('Admin.ViewBrand',compact('brand'));
    }
     public function DeleteBrand(Request $req,$id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('viewbrand');
    }
  
}
