<?php

namespace App\Http\Controllers\Store;

use App\Events\UserOrderedItems;
use App\Http\Controllers\Controller;
use App\Http\Services\FreteCorreiosService;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$products = Product::limit(6)->orderBy('id', 'DESC')->get();
        $products = Product::query()->orderBy('id', 'DESC')->paginate(3, ['*'], 'pagina');
        $stores = Store::query()->limit(3)->get();
        $brands = Brand::query()->limit(10)->get();
        $featured = Product::query()->orderBy('id', 'DESC')->limit(3)->get();
        $maxslider = 1297;

        return view('store.welcome', [
            'products' => $products,
            'stores' => $stores,
            'brands' => $brands,
            'category_filter' => null,
            'maxslider' => $maxslider,
            'listFeatured' => $featured
        ]);
    }

    public function single(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('store.product', [
            'product' => $product
        ]);
    }

    public function calcularFrete(Request $request)
    {
        $calculardor = new FreteCorreiosService();
        return $calculardor->calcularFrete($request);
    }
}
