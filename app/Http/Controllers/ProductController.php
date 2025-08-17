<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|min:3',
            'price' => 'required|numeric|min:0',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(string $id)
    {
            return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required|min:3',
            'price' => 'required|numeric|min:0',
        ]);

        Product::update($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function destroy(string $id)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
