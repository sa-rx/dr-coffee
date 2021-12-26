<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\About;


use Illuminate\Http\Request;

class StorePanelController extends Controller
{
    public function index()
    {           
        $about = About::find(1);
        $products = Product::orderBy('id','ASC')->get();
        return view('store.index',compact('products','about'));
    }
}
