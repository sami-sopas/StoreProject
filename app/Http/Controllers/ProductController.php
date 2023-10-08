<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //vista con form creacion
        return view ('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price'=>'required',
            'existance'=>'required',
            'description'=>'required'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->existance = $request->existance;
        $product->description = $request->description;

        $product->save();

        return redirect('product');
    }

    /**
     * Display the specified resource.
     */

     //Aunque recibe un ID, aqui lo que hace es encontrar todo al objeto
    public function show(Product $product)
    {
        return view('Product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->existance = $request->existance;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('product.index');
        //$product = Product::find($data->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index'); 
    }
}