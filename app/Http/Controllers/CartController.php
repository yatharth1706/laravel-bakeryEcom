<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Session;

class CartController extends Controller
{
    //
    public function save(Request $request){
        // this one is using model communication with database

        // $cart = new Cart();
        // $cart->name = request('hidden_name');
        // $cart->cost = request('hidden_cost');
        // $cart->quantity = request('quantity');
        
        // $cart->save();
        // return redirect('/');

        $tableName = session('username')."_cart";
        $sql = "insert into " . $tableName . "(name,cost,quantity) values(?,?,?)";
        DB::insert($sql,[$request->input('hidden_name'),$request->input('hidden_cost'),$request->input('quantity')]);

        return redirect("/products");
    }

    public function show(){
        $tableName = session('username')."_cart"; 
        $sql = "SELECT * FROM " . $tableName;
        $items = DB::select($sql);
        
        return view('cart',[
            'items' => $items
        ]);
    }
}
