<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /** 
     * 
     * display a listing of the resouce.
     */
     // @return \Illuminate\Http\Respose.
     /** */
     
     public function index()
     {
        $products = DB::table('products')->get();
        return view('products.index',compact('products'));
     }

}
