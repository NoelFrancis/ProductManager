<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', ['products' => $products]);

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate
        ([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);
        $newproduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(product $product, Request $request)
    {
        $data = $request->validate
        ([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);
        $product->update($data);

        return redirect(route('product.index'))->with('sucess', 'Updated Succesffully');
    }

    public function delete(product $product)
    {

        $product->delete();
        return redirect(route('product.index'))->with('sucess', 'Deleted Succesffully');
    }

}
