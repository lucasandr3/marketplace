<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class UserOrdersController extends Controller
{
    public function index()
    {
        $orders = UserOrder::where('user_id', auth()->id())->paginate(10);
        return view('store.orders', [
            'orders' => $orders
        ]);
    }
}
