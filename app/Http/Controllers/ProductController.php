<?php

namespace App\Http\Controllers;

use App\Mail\ProductoCreado;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //Pedir a todos los metodos que deben estar autenticad
    // public function __construct()
    // {   
    //     $this->middleware('auth')->except(['create']);

            // o $this->middleware('auth')->only(['index','show']) etc..
    // }

    public function index()
    {
        //Eager loading
        $products = Product::with('user')->get(); //Product::all();

        //Otra forma $products = Product::with('user:id,name')->with(requerimientos)->get();
    

        return view('Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //vista con form creacion

        $categories = Category::all();
        $colors = Color::all();

        return view ('Product.create',compact('categories','colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price'=>'required',
            'existance'=>'required',
            'description'=>'required'
        ]);

        //Inyectar el user id
        $request->merge(['user_id' => Auth::id()]);

        $product = Product::create($request->all());

        //Pal de n:n    
        $product->colors()->attach($request->color_id);

        //$product->colors()->attatch($request->color_id);  y después usamos el seeder

        // $product = new Product();
        // $product->name = $request->name;
        // $product->category_id = $request->category_id;
        // $product->price = $request->price;
        // $product->existance = $request->existance;
        // $product->description = $request->description;
        // $product->user_id = Auth::id();
 
        // $product->save();

        Mail::to($request->user())->send(new ProductoCreado($product));

        return redirect()->route('product.index');
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
        if(!Gate::allows('admin-product',$product)) {
            return abort(403);
        }

        $categories = Category::all();

        return view('Product.edit',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if(!Gate::allows('admin-product',$product)) {
            return abort(403);
        }

        $request->validate([
            'name' => 'required',
            'price'=>'required',
            'existance'=>'required',
            'description'=>'required'
        ]);


        //Simplificando ando
        // Product::where('id',$product->id)
        //     ->update($request->except('_token','_method'));

        $product->name = $request->name;
        $product->category_id = $request->category;
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
    public function destroy(Request $request,Product $product)
    {
        // if ($request->user()->cannot('create', Post::class)) {
        //     abort(403);
        // }

        $this->authorize('delete',$product);
        $product->delete();
        return redirect()->route('product.index'); 
    }
}