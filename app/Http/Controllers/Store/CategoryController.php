<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use App\Models\SubDivision;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->paginate(9, ['*'], 'pagina');
        $brands = Brand::query()->limit(10)->get();
        $featured = Product::query()->orderBy('id', 'DESC')->limit(3)->get();

        $category_filter = $this->makeFilter($category, 'category');

        return view('store.category', [
            'category' => $category,
            'products' => $products,
            'brands' => $brands,
            'listFeatured' => $featured,
            'category_filter' => $category_filter
        ]);
    }

    public function department($slug)
    {
        $department = Department::where('slug', $slug)->first();
        $products = $department->products()->paginate(9, ['*'], 'pagina');
        $category_filter = $this->makeFilter($department, 'department');

        $brands = Brand::query()->limit(10)->get();
        $featured = Product::query()->orderBy('id', 'DESC')->limit(3)->get();

        return view('store.department', [
            'department' => $department,
            'products' => $products,
            'brands' => $brands,
            'listFeatured' => $featured,
            'category_filter' => $category_filter
        ]);
    }

    public function division($slug)
    {
        $division = SubDivision::where('slug', $slug)->first();
        $products = $division->products()->paginate(9, ['*'], 'pagina');
        $category_filter = $this->makeFilter($division, 'division');
        $brands = Brand::query()->limit(10)->get();
        $featured = Product::query()->orderBy('id', 'DESC')->limit(3)->get();

        return view('store.division', [
            'division' => $division,
            'products' => $products,
            'brands' => $brands,
            'listFeatured' => $featured,
            'category_filter' => $category_filter
        ]);
    }

    private function makeFilter($object, $level)
    {
        if ($level === 'department') {
            $levels = [
                'category' => (object) ['name' => $object->category->name_category, 'slug' => $object->category->slug],
                'department' => (object) ['name' => $object->name_department, 'slug' => $object->slug]
            ];

            return (object) $levels;
        }

        if ($level === 'division') {
            $levels = [
                'category' => (object)['name' => $object->category->name_category, 'slug' => $object->category->slug],
                'department' => (object)['name' => $object->department->name_department, 'slug' => $object->department->slug],
                'division' => (object)['name' => $object->name_division, 'slug' => $object->slug]
            ];

            return (object) $levels;
        }

        $levels = [
            'category' => (object)['name' => $object->name_category, 'slug' => $object->slug]
        ];

        return (object) $levels;
    }
}
