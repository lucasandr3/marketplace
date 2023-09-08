<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::query()->where('slug', $slug)->first();
        $brands = Brand::query()->limit(10)->get();
        $featured = Product::query()->orderBy('id', 'DESC')->limit(3)->get();
        $category_filter = $this->makeFilter($product, 'category');


        return view('store.product', [
            'product' => $product,
            'brands' => $brands,
            'listFeatured' => $featured,
            'category_filter' => $category_filter
        ]);
    }

    private function makeFilter($object, $level)
    {
        $levels = [
            'product' => (object)['name' => $object->name, 'slug' => $object->slug],
            'category' => (object)['name' => $object->categories()->first()->name_category, 'slug' => $object->categories()->first()->slug],
            'department' => (object)['name' => $object->departments()->first()->name_department, 'slug' => $object->departments()->first()->slug],
            'division' => (object)['name' => $object->subdivisions()->first()->name_division, 'slug' => $object->subdivisions()->first()->slug]
        ];

        return (object) $levels;
    }
}
