<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function doLogin(Request $request){
}
}