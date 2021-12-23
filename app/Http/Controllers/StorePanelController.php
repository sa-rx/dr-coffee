<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class StorePanelController extends Controller
{
    public function index()
    {           
        
        $products = Product::orderBy('id','ASC')->get();
        return view('store.index',compact('products'));
    }
}
