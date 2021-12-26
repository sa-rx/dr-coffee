<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{

    
    function __construct()
    {
        $this->middleware('permission:المنتجات|اضافة منتج', ['only' => ['index']]);
        $this->middleware('permission:اضافة منتج|تعديل منتج', ['only' => ['create','store']]);
        $this->middleware('permission:تعديل منتج', ['only' => ['edit','update']]);
        $this->middleware('permission:حذف منتج', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'price'=>'required'
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->offer_price = $request->input('offer_price');
        $product->available = $request->input('available');
        
           // if($request->hasfile('img'));
          //  {
            //    $file = $request->file('img');
            //    $extension = $file->getClientOriginalExtension();
             //   $fileNmae = time().'.'.$product->name.'.'.$request->img->extension();
              //  $file->move(public_path('images/products'),$fileNmae);
              //  $product->img =$fileNmae;
              
          //  }
        $product->save();
        return redirect()->to('products')->with('message','تمت اضافة المنتج بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([

            'name'=>'required',
            'price'=>'required'
        ]);
        
        $product->name = $request->input('name');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->offer_price = $request->input('offer_price');
        $product->available = $request->input('available');
        
           // if($request->hasfile('img'));
           // {
             //   $destination = 'images/products/'.$product->img;
             //   if(File::exists($destination))
              //  {
              //      File::delete($destination);
              //  }
               // $file = $request->file('img');
              //  $extension = $file->getClientOriginalExtension();
              //  $fileNmae = time().'.'.$product->name.'.'.$request->img->extension();
              //  $file->move(public_path('images/products/'),$fileNmae);
              //  $product->img =$fileNmae;
              
           // }


            

        $product->update();
        return redirect()->to('products')->with('message','تمت تعديل المنتج بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       // $destination = 'images/products/'.$product->img;
           // if(File::exists($destination))
           // {
           //     File::delete($destination);
           // }
        $product->delete();
        return redirect()->to('products')->with('message','تمت حذف المنتج بنجاح');

    }
}
