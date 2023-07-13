<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(8)->orderBy('id', 'DESC')->get();

        return view('welcome', [
            'products' => $products
        ]);
    }
}
