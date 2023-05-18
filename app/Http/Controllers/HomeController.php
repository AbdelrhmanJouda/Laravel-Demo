<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('home.home');
    }
    public function about($id=null)
    {
        return view('home.about',compact('id'));
    }
    public function products()
    {
        return view('products');
    }
}
