<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
    public function index($slug)
    {
        $store = Store::where('slug', $slug)->first();

        return view('store.store', [
            'store' => $store
        ]);
    }
}
