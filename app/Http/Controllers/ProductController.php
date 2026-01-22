<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

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
        "img"=> $request->file("img")? $request->file("img")->store("image", "public" ) : "/media/default.jpg",

        ]);

        return redirect(route("products_index"))->with("status", "Prodotto salvato correttamente");
    }
}
