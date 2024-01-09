<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  		function Home(Request $req){
  			if(!$req->session()->has('admin')){
  				return redirect()->route('login');
  			}
  			return view('Admin.Home');
  		}

  }
