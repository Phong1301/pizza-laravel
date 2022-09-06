<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontEndController extends Controller
{
    public function home(Request $request){
        
        
        return view('pages.fe.home');
    }

    public function category(Request $request, $category = null){
       
      
        return view('pages.fe.home');
    }
    

}
