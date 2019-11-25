<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function store(Request $request){
        cart::add($request->id, $request->name,1, $request->price)
        ->associate('App\Product');
        return redirect()->route('cart.index');
    }

    public function destroy($id){
        Cart::remove($id);
        return back();
    }
}
