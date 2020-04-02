<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
     function index()
     {   if(session('username')=='admin')
         {
             return view('admin');
         }
         else
         {
             return view('index');
         }
     }

     function productSelector(Request $request)
     {   $product=$request->input('product');
         $productdetail =json_decode(DB::table($product)->get(),true);
        // print_r($productdetail[0]['id']);
        Session::put('product',$productdetail);
        Session::put('productName',$product);
         
        return redirect('product');
     }
}
