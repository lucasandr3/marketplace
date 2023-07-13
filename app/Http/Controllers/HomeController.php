<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(8)->orderBy('id', 'DESC')->get();

        return view('store.welcome', [
            'products' => $products
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
