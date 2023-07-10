<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        $store = auth()->user()->store;
        $store->products()->create($data);
        flash('Produto criado com Sucesso.')->success();
        return redirect()->route('products');
    }

    public function edit($product)
    {
        $product = Product::find($product);
        return view('admin.products.edit', [
            'product' => $product
        ]);
    }

    public function update(UpdateProductRequest $request, $product)
    {
        $data = $request->all();
        $product = Product::find($product);
        $product->update($data);
        flash('Produto atualizado com Sucesso.')->success();
        return redirect()->route('products');
    }

    public function destroy($product)
    {
        $product = Product::find($product);
        $product->delete();
        flash('Produto removido com Sucesso.')->success();
        return redirect()->route('products');
    }
}
