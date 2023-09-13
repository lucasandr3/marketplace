<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
    public function index($slug)
    {
        $store = Store::where('slug', $slug)->first();
        $products = $store->products()->orderBy('id', 'DESC')->paginate(3, ['*'], 'pagina');

        return view('store.store', [
            'store' => $store,
            'products' => $products,
            'category_filter' => null,
            'brands' => [],
            'listFeatured' => []
        ]);
    }
}
