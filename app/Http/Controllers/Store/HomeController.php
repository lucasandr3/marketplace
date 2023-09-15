<?php

namespace App\Http\Controllers\Store;

use App\Events\UserOrderedItems;
use App\Http\Controllers\Controller;
use App\Http\Services\FilterService;
use App\Http\Services\FreteCorreiosService;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $filter = FilterService::filter($request);
        //$products = Product::limit(6)->orderBy('id', 'DESC')->get();
        $products = $this->getProducts($filter);
//        echo "<pre>"; var_dump($products->toArray()); echo "</pre>"; die;
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
            'listFeatured' => $featured,
            'filter' => $filter
        ]);
    }

    public function single(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('store.product', [
            'product' => $product
        ]);
    }

    public function getProducts($filter)
    {
        return Product::query()
            ->when(isset($filter->term), function ($query) use ($filter) {

                if ($filter->value === 'category') {
                    $value = ucfirst($filter->term);
                    $query->join('category_product', 'category_product.product_id', '=', 'products.id')
                        ->join('categories', 'categories.id', '=', 'category_product.category_id')
                        ->where('categories.name_category', 'LIKE', "%{$value}%");
                }

                if ($filter->value === 'department') {
                    $value = ucfirst($filter->term);
                    $query->join('category_product', 'category_product.product_id', '=', 'products.id')
                        ->join('departments', 'departments.id', '=', 'category_product.department_id')
                        ->where('departments.name_department', 'LIKE', "%{$value}%");
                }

                if ($filter->value === 'division') {
                    $value = ucfirst($filter->term);
                    $query->join('category_product', 'category_product.product_id', '=', 'products.id')
                        ->join('sub_divisions', 'sub_divisions.id', '=', 'category_product.sub_division_id')
                        ->where('sub_divisions.name_division', 'LIKE', "%{$value}%");
                }

                if ($filter->value === 'process') {
                    $value = ucfirst($filter->term);
                    $query->join('process', 'process.product_id', '=', 'products.id')
                        ->where('process.number', 'LIKE', "%{$value}%");
                }

                if ($filter->value === 'supply') {
                    $value = ucfirst($filter->term);
                    $query->join('supply', 'supply.product_id', '=', 'products.id')
                        ->where('supply.name', 'LIKE', "%{$value}%");
                }
            })
            ->orderBy('products.id', 'DESC')
            ->paginate(3, ['*'], 'pagina');
    }

    public function calcularFrete(Request $request)
    {
        $calculardor = new FreteCorreiosService();
        return $calculardor->calcularFrete($request);
    }
}
