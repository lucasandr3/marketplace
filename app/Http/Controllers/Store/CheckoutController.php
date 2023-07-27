<?php

namespace App\Http\Controllers\Store;

use App\Events\UserOrderedItems;
use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Payment\PagSeguro\CreditCard;
use Exception;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function index()
    {
        session()->forget('pg_session_code');
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (!session()->has('cart')) {
            return redirect()->route('home');
        }

        $this->makeCodeSessionPagseguro();

        $cartItens = array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, session()->get('cart'));

        $cartItens = array_sum($cartItens);

        return view('store.checkout', [
            'total' => $cartItens
        ]);
    }

    public function process(Request $request)
    {
        try {
            $dataPayment = $request->all();
            $cartItems = session()->get('cart');
            $user = auth()->user();
            $reference = generateIdentifyOrder();
            $stores = array_unique(array_column($cartItems, 'store_id'));

//            $creditCardPayment = new CreditCard($cartItems, $user, $dataPayment, $reference);
//            $payment = $creditCardPayment->doPayment();

//            $userOrder = [
//                'reference' => $reference,
//                'pagseguro_code' => $payment->getCode(),
//                'pagseguro_status' => $payment->getStatus(),
//                'items' => json_encode($cartItems)
//            ];

            $dataOrder = [
                'reference' => $reference,
                'pagseguro_code' => "fdfdFdf212",
                'pagseguro_status' => '1',
                'items' => json_encode($cartItems),
                'store_id' => 2
            ];

            $userOrder = $user->orders()->create($dataOrder);
            $userOrder->stores()->sync($stores);

            event(new UserOrderedItems($userOrder));
            // notifica as lojas
            (new Store())->notifyStoreOwners($stores);

            session()->forget('cart');
            session()->forget('pg_session_code');

            return response()->json([
                'data' => [
                    'status' => true,
                    'message' => 'Compra realizada com sucesso.',
                    'order' => '123'
                ]
            ]);
        } catch (Exception $exception) {

            $error = [
                'store_id' => 42,
                'message' => $exception->getMessage(),
                'status_code' => 500,
                'items' => json_encode($cartItems)
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
        return view('store.thanks');
    }

    private function makeCodeSessionPagseguro()
    {
        if (!session()->has('pg_session_code')) {

            $sessionCode = \PagSeguro\Services\Session::create(
                \PagSeguro\Configuration\Configure::getAccountCredentials()
            );

            session()->put('pg_session_code', $sessionCode->getResult());
        }
    }

}
