<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            new Middleware("auth", except: ["products_index"]),

        ];
    }

    public function products_index(){
         $products = Product::all();
        
        return view ("products.index", compact("products") );


    }

    public function products_create(){
        $products=Product::all();
        $categories=Category::all();
        return view ("products.create", compact("categories") );
       
        
    }


    public function product_submit(Request $request){


        Product::create([

        "name"=> $request->name,
        "description"=> $request->description,
        "price"=> $request->price,
        "img"=> $request->file("img")? $request->file("img")->store("image", "public" ) : "/media/default.jpg",
        "user_id"=> Auth::user()->id,

        ]);

        return redirect(route("products_index"))->with("status", "Prodotto salvato correttamente");

        $product->categorie()->attach($request->categories);
            return redirect(route("products_index"));
    }

    public function show(Product $product){
       
        return view("products.show", compact("product"));
    }

    public function edit(Product $product){
        return view("products.edit", compact("product"));
    }

     public function update(Request $request,Product $product){
        $product->update([
        "name"=> $request->name,
        "description"=> $request->description,
        "price"=> $request->price,
        "img"=> $request->file("img")? $request->file("img")->store("image", "public" ) : "/media/default.jpg",
        "user_id"=> Auth::user()->id,
        ]);

        return redirect(route("product_show", compact("product")))->with("status", "Prodotto Modificato correttamente!");
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route("products_index"));
    }
}
