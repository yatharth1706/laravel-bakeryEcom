<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    //
    public function save(){
        $cart = new Cart();
        $cart->name = request('hidden_name');
        $cart->cost = request('hidden_cost');
        $cart->quantity = request('quantity');
        
        $cart->save();
        return redirect('/');
    }

    public function show(){
        $items = Cart::all();
        
        return view('cart',[
            'items' => $items
        ]);
    }
}
