<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function index()
    {
    	return view('front');  
    }
    public function company()
    {
    	return view('company');  
    }
    public function pics()
    {
    	return view('pic');  
    }
}
