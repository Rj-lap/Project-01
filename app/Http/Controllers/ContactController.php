<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class ContactController extends Controller
{
    function Viewquery(Request $req){
        $view=contact::select('contacts.id','contacts.name','contacts.email','contacts.subject','contacts.massage')
        ->get();
        return view('Admin.Viewquery',compact('view'));
    }
}
