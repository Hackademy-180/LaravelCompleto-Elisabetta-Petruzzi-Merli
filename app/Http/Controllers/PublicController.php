<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    

    public function home(){
        return view ("welcome");
    }

    public function products_index(){
         $products = Product::all();
        
        return view ("products.index", compact("products") );
    }

    public function products_create(){
       
        return view ("products.create" );
    }

    public function product_submit(Request $request){

       

       Product::create([
        "name"=> $request->name,
        "description"=> $request->description,
        "price"=> $request->price,
        "img"=> $request->file("img")->store("image", "public"),
       ]);

        return redirect(route("home"))->with("status", "Prodotto caricato correttamente!");
    }
}
