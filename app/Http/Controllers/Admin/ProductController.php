<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $storeUser = auth()->user()->store;
        $products = $storeUser->products()->paginate(10);

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        $store = auth()->user()->store;

        $product = $store->products()->create($data);

        $product->categories()->sync($data['categories']);

        flash('Produto criado com Sucesso.')->success();
        return redirect()->route('products');
    }

    public function edit($product)
    {
        $product = Product::find($product);
        $categories = Category::all(['id', 'name']);

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(UpdateProductRequest $request, $product)
    {
        $data = $request->all();
        $product = Product::find($product);
        $product->update($data);
        $product->categories()->sync($data['categories']);
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
