<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index()
    {
        $quotations = auth()->user()->store->quotations()->paginate(10);
        $store = auth()->user()->store;
//echo "<pre>"; var_dump(auth()->user()->store->orders()->get()->count()); echo "</pre>"; die;
        return view('admin.quotations.index', [
            'quotations' => $quotations,
            'store' => $store
        ]);
    }
}
