<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\UploadFilesServiceInterface;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private UploadFilesServiceInterface $uploadService;

    public function __construct(UploadFilesServiceInterface $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $storeUser = auth()->user()->store;

        if (!empty($storeUser)) {
            $products = $storeUser->products()->paginate(10);
        }

        return view('admin.pages.products.index', [
            'products' => !empty($storeUser) ? $products : [],
            'filters' => []
        ]);
    }

    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('admin.pages.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        $store = auth()->user()->store;

        $categories = $request->get('categories', null);

        $product = $store->products()->create($data);

        if (!is_null($categories)) {
            $product->categories()->sync($categories);
        }

        if ($request->hasFile('photos')) {
            $images = $this->uploadService->uploadFilesMultiple($request, 'stores/produtos', 'image');
            $product->images()->createMany($images);
        }

        flash('Produto criado com Sucesso.')->success();
        return redirect()->route('products');
    }

    public function show($product)
    {
        $product = Product::find($product);
        $categories = Category::all(['id', 'name']);

        return view('admin.pages.products.show', [
            'product' => $product,
            'categories' => $categories
        ]);
    }
    public function edit($product)
    {
        $product = Product::find($product);
        $categories = Category::all(['id', 'name']);

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(UpdateProductRequest $request, $product)
    {
        $data = $request->all();
        $categories = $request->get('categories', null);
        $product = Product::find($product);
        $product->update($data);

        if (!is_null($categories)) {
            $product->categories()->sync($categories);
        }

        if ($request->hasFile('photos')) {
            $images = $this->uploadService->uploadFilesMultiple($request, 'stores/produtos', 'image');
            $product->images()->createMany($images);
        }

        flash('Produto atualizado com Sucesso.')->success();
        return redirect()->back();
    }

    public function destroy($product)
    {
        $product = Product::find($product);
        $product->delete();
        flash('Produto removido com Sucesso.')->success();
        return redirect()->route('products');
    }
}
