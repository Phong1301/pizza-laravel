<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontEndController extends Controller
{
    public function home(Request $request){

        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        return view('pages.fe.home', ['categories' => $categories , 'products' => $products]);
    }
}
