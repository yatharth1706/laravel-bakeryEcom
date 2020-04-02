<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake;

class cakeController extends Controller
{
    //
    public function index(){

        $cakes = Cake::all();
        
        return view('products',[
            'cakes' => $cakes
        ]);
    }
}
