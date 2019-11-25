<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
class CheckoutController extends Controller
{
    public function index(){
        return view('checkout.index');
    }

    public function store(Request $request){
        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    //'contents' => $contents,
                   // 'quantity' => Cart::instance('default')->count(),
                   // 'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);
                dd($charge);
            // successful
            return back()->with('success_message', 'Thank You!');

    }catch(Exception $e){
        
    }
   
    }
}