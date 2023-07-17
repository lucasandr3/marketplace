<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Exception;
use Illuminate\Http\Request;

class CheckoutQuotationController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (!session()->has('quotation')) {
            return redirect()->route('home');
        }

        $quotationItens = array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, session()->get('quotation'));

        $quotationItens = array_sum($quotationItens);

        return view('store.checkout_quotation', [
            'total' => $quotationItens
        ]);
    }

    public function process(Request $request)
    {
        try {
            $dataQuotation = $request->all();
            $quotationItens = session()->get('quotation');
            $user = auth()->user();
            $reference = generateIdentifyOrder();
            $stores = array_unique(array_column($quotationItens, 'store_id'));

            $data = [
                'reference' => $reference,
                'message' => $dataQuotation['message'],
                'items' => json_encode($quotationItens),
            ];

            $userQuotation = $user->quotations()->create($data);
            $userQuotation->stores()->sync($stores);

            // notifica as lojas
            (new Store())->notifyQuotationStoreOwners($stores);
//
//            session()->forget('cart');
//            session()->forget('pg_session_code');

            return response()->json([
                'data' => [
                    'status' => true,
                    'message' => 'Cotação realizada com sucesso.',
                    'order' => $reference
                ]
            ]);
        } catch (Exception $exception) {
            $error = [
                'store_id' => 42,
                'message' => $exception->getMessage(),
                'status_code' => 500,
                'items' => json_encode($quotationItens)
            ];

            $user->saleOrders()->create($error);

            return response()->json([
                'data' => [
                    'status' => false,
                    'message' => 'teste'
                ]
            ], 401);
        }
    }

    public function thanks()
    {
        return view('store.thanks_quotation');
    }
}
