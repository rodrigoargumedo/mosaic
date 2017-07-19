<?php

namespace Mosaic\Http\Controllers;

use Mosaic\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET /product
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /product/new
        $product = new Product;
        return view('product.new', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /product
        Product::create(['title', 'description', 'price']);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Mosaic\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // GET /product/{product}
        $product = Product::find($product);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Mosaic\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // GET /product/{product}/edit
        $product = Product::find($product);
        
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Mosaic\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // PUT/PATCH /product
        $product = Product::find($product);
        
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->save();
        
        return redirect('product.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Mosaic\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // DELETE /product/{product}
        $product = Product::find($product);
        $product->delete();
        return redirect()->route('product.index');
    }
}
