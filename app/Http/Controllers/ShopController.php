<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
 
    public function index(){
        $products = Product::get();
        
       return view('shoplist', compact('products'));
    }

   
    public function show( $name){
        $instanceofproduct = Product::where('name', $name)->firstorFail();

        return view('shop.show',compact('instanceofproduct'));
    }
}
