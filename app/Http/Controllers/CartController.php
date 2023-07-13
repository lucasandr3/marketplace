<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];

        return view('store.cart', [
            'cart' => $cart
        ]);
    }

    public function add(Request $request)
    {
        $product = $request->get('product');

        if (session()->has('cart')) {

            $products = session()->get('cart');
            $productsSlugs = array_column($products, 'slug');

            if (in_array($product['slug'], $productsSlugs, true)) {
                $newProducts = $this->productIncrement($product['slug'], $product['quantity'], $products);
                session()->put('cart', $newProducts);
            } else {
                session()->push('cart', $product);
            }

        } else {
            $products[] = $product;
            session()->put('cart', $products);
        }

        flash('Produto adicionado ao carrinho.');
        return redirect()->back();
    }

    public static function remove($slug)
    {
        if (!session()->has('cart')) {
            return redirect()->back();
        }

        $products = session()->get('cart');

        $products = array_filter($products, function ($item) use ($slug) {
            return $item['slug'] !== $slug;
        });

        session()->put('cart', $products);
        flash('Produto removido com sucesso')->success();
        return redirect()->back();
    }

    public function cancel()
    {
        session()->forget('cart');
        flash('Compra cancelada')->success();
        return redirect()->route('home');
    }

    private function productIncrement($slug, $quantity, $products): array
    {
        return array_map(function ($item) use ($slug, $quantity) {
            if ($slug === $item['slug']) {
                $item['quantity'] += $quantity;
            }
            return $item;
        }, $products);
    }
}
