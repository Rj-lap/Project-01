<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CategroyController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/about',[HomeController::class,'About'])->name('about');
Route::get('/contact',[HomeController::class,'Contact'])->name('contact');
Route::post('/contact',[HomeController::class,'Contact'])->name('contact');

Route::get('/login',[HomeController::class,'Login'])->name('login');
Route::post('/login',[HomeController::class,'Login'])->name('login');
Route::get('/signup',[HomeController::class,'Signup'])->name('signup');
Route::post('/signup',[HomeController::class,'Signup'])->name('signup');
Route::get('/logout',[HomeController::class,'Logout'])->name('logout');
Route::get('/myprofile',[HomeController::class,'Myprofile'])->name('myprofile');
Route::get('/OurService',[HomeController::class,'OurService'])->name('OurService');


// filter
Route::get('/filter',[HomeController::class,'Filter'])->name('filter');


Route::post('/payment',[CartController::class,'pay'])->name('pay');




//CART
Route::get('/cart',[CartController::class,'Cart'])->name('cart');
Route::get('/deletecart/{id}',[CartController::class,'Deletecart'])->name('deletecart');
Route::get('/addcart/{id}',[CartController::class,'AddCart'])->name('addcart');
Route::post('/addcart/{id}',[CartController::class,'AddCart'])->name('addcart');
Route::get('/editcart/{id}',[CartController::class,'AddCart'])->name('editcart');
Route::post('/editcart/{id}',[CartController::class,'AddCart'])->name('editcart');

// Admin
Route::get('/admin',[AdminController::class,'Home'])->name('admin');
//product
Route::get('/admin/addproduct',[ProductController::class,'AddProduct'])->name('addproduct');
Route::post('/admin/addproduct',[ProductController::class,'AddProduct'])->name('addproduct');
Route::get('/admin/viewproduct',[ProductController::class,'ViewProduct'])->name('viewproduct');
Route::get('/admin/addproduct/{id}',[ProductController::class,'AddProduct'])->name('edit');
Route::post('/admin/addproduct/{id}',[ProductController::class,'AddProduct'])->name('edit');
Route::get('/admin/viewproduct/{id}',[ProductController::class,'DeleteProduct'])->name('delete');
//useer
Route::get('/admin/viewuser',[UserController::class,'ViewUser'])->name('viewuser');

// Catergory

Route::get('/admin/addcategory',[CategroyController::class,'AddCategory'])->name('addcategory');
Route::post('/admin/addcategory',[CategroyController::class,'AddCategory'])->name('addcategory');
 Route::get('/admin/viewCategory',[CategroyController::class,'ViewCategroy'])->name('viewcategory');
 Route::get('/admin/addcategory/{id}',[CategroyController::class,'AddCategory'])->name('edi');
Route::post('/admin/addcategory/{id}',[CategroyController::class,'AddCategory'])->name('edi');
Route::get('/admin/viewCategory/{id}',[CategroyController::class,'DeleteCategroy'])->name('dele');


 // BRAND
 Route::get('/admin/addbrand',[BrandController::class,'AddBrand'])->name('addbrand');
  Route::post('/admin/addbrand',[BrandController::class,'AddBrand'])->name('addbrand');
  Route::get('/admin/viewbrand',[BrandController::class,'ViewBrand'])->name('viewbrand');
  Route::get('/admin/addbrand/{id}',[BrandController::class,'AddBrand'])->name('editbrand');
Route::post('/admin/addbrand/{id}',[BrandController::class,'AddBrand'])->name('editbrand');
Route::get('/admin/viewbrand/{id}',[BrandController::class,'DeleteBrand'])->name('deletebrand');
//user

Route::get('/admin/Viewuser',[UserController::class,'ViewUser'])->name('viewuser');

Route::get('/admin/Viewquery',[ContactController::class,'Viewquery'])->name('viewquery');