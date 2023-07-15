<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserOrdersController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->store->orders()->paginate(10);
        $store = auth()->user()->store;

        return view('store.orders', [
            'orders' => $orders,
            'store' => $store
        ]);
    }
}
