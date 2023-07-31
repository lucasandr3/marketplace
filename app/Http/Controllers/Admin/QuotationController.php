<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserOrder;
use App\Models\UserQuotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index()
    {
        $quotations = auth()->user()->store->quotations()->paginate(10);
        $store = auth()->user()->store;

        return view('admin.pages.quotations.index', [
            'quotations' => $quotations,
            'store' => $store,
            'filters' => []
        ]);
    }

    public function produtos($orderReference)
    {
        $pedido = UserQuotation::where('reference', $orderReference)->first();

        if (!$pedido) {
            flash('Algo deu errado, tente novamente.')->warning();
            return redirect()->back();
        }

        $items = json_decode($pedido->items);

        return view('admin.pages.quotations.produtos', [
            'produtos' => $items
        ]);
    }
}
