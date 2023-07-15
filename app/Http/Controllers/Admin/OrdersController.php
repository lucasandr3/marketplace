<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->store->orders()->paginate(10);
        $store = auth()->user()->store;

        return view('admin.orders.index', [
            'orders' => $orders,
            'store' => $store
        ]);
    }
}
