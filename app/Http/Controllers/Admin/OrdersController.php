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
//echo "<pre>"; var_dump(auth()->user()->store->orders()->get()->count()); echo "</pre>"; die;
        return view('admin.orders.index', [
            'orders' => $orders,
            'store' => $store
        ]);
    }
}
