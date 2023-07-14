<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(6)->orderBy('id', 'DESC')->get();
        $stores = Store::limit(3)->get();

        return view('store.welcome', [
            'products' => $products,
            'stores' => $stores
        ]);
    }

    public function single(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('store.product', [
            'product' => $product
        ]);
    }
}
