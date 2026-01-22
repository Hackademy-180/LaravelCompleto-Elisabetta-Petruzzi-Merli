<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    

    public function home(){
        return view ("welcome");
    }

    // public function products_index(){
    //      $products = Product::all();
        
    //     return view ("products.index", compact("products") );
    // }

    // public function products_create(){
       
    //     return view ("products.create" );
    // }


    
}
