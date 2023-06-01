<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function checkUserType(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->userType==='ADM'){
            return redirect()->route('admin.dashboard'); 
        }
        if(Auth::user()->userType==='USR'){
            return redirect()->route('user.dashboard'); 
        }
    }





}
