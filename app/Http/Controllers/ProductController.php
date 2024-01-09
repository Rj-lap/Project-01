<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categroy;
use App\Models\Brand;

class ProductController extends Controller
{
    public function AddProduct(Request $req)
    {
    	$product = new Product;
    	if ($req->input('add_product')) {
    		if ($req->has('product_ima')) {
    			$image = $req->file('product_ima');
    			$filename = $image->getClientOriginalName();
                $path = 'ProductImage/';
                $image->move($path,$filename);
    			$product->product_image = $filename;
    		}
    		$product->product_name = $req->input('product_name');
    		$product->product_price = $req->input('product_price');
    		$product->cat_id = $req->input('category');
    		$product->brand_id = $req->input('brand');
    		$product->product_description = $req->input('product_description');

    	$product->save();	

        return redirect()->route('viewproduct');
    	}
        // EDIT
        if ($req->segment(3)) {
            $eid = $req->segment(3);
            $product = Product::where('id',$eid)->first();
        }
        if ($req->input('update_product')) {
            $product = Product::find($eid);
            $product->product_name = $req->input('product_name');
            $product->product_price = $req->input('product_price');
            $product->cat_id = $req->input('category');
            $product->brand_id = $req->input('brand');
            $product->product_description = $req->input('product_description');
            $product->save();
        }
    	$brand = Brand::all();
        $categroy = Categroy::all();
    	return view('Admin.Addproduct',compact('product','brand','categroy'));
    }

    public function ViewProduct(Request $req)
    {
     //    $product = Product::all();
    	// return view('Admin.Viewproduct',compact('product'));
         $product = Product::select('products.id','products.product_name','products.product_price','products.product_description','products.product_image','categroys.category_name','brands.brand_name')
         ->join('categroys','categroys.id','products.cat_id')
         ->join('brands','brands.id','products.brand_id')
         ->get();

         return view('Admin.ViewProduct',compact('product'));
    }
    public function DeleteProduct(Request $req,$id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('viewproduct');
    }
   
}
