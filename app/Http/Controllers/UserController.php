<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dbuser;
class UserController extends Controller
{
  		 function ViewUser(Request $req)
    {
        $user = Dbuser::select('dbusers.id','dbusers.name','dbusers.email','dbusers.password','dbusers.profile')
         ->get();


    	 return view('Admin.ViewUser',compact('user'));
    }

}
