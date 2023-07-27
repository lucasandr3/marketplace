<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class QuotationStoreController extends Controller
{
    public function index()
    {
        $quotation = session()->has('quotation') ? session()->get('quotation') : [];

        return view('store.quotation', [
            'quotation' => $quotation
        ]);
    }

    public function add(Request $request)
    {
        $productData = $request->get('product');

        $product = Product::where('slug', $productData['slug'])->first(['name', 'price', 'store_id'])->toArray();

        if (empty($product)) {
            flash('Algo deu errado, tente novamente.')->error();
            return redirect()->back();
        }

        $productData['quantity'] = abs($productData['quantity']);
        $product = array_merge($productData, $product);

        if (session()->has('quotation')) {

            $products = session()->get('quotation');
            $productsSlugs = array_column($products, 'slug');

            if (in_array($product['slug'], $productsSlugs, true)) {
                $newProducts = $this->productIncrement($product['slug'], abs($product['quantity']), $products);
                session()->put('quotation', $newProducts);
            } else {
                session()->push('quotation', $product);
            }

        } else {
            $products[] = $product;
            session()->put('quotation', $products);
        }

        flash('Produto adicionado a cotação.');
        return redirect()->back();
    }

    public static function remove($slug)
    {
        if (!session()->has('quotation')) {
            return redirect()->back();
        }

        $products = session()->get('quotation');

        $products = array_filter($products, function ($item) use ($slug) {
            return $item['slug'] !== $slug;
        });

        session()->put('quotation', $products);
        flash('Produto removido com sucesso')->success();
        return redirect()->back();
    }

    public function cancel()
    {
        session()->forget('quotation');
        flash('Cotação cancelada')->success();
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
