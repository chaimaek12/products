<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
 {   
// anjeb ga3 les produits bach ibano 
    public function index()
{
    $products = Product::all(); 
    return view('products.index', compact('products'));
}

// knkhsen lbayanat li jbt mn lform 
public function store(Request $request)
{
    Product::create($request->all());
    return redirect()->back();
}



public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->back();
}



public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}


public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->update($request->all());

    return redirect('/products');
}
}
