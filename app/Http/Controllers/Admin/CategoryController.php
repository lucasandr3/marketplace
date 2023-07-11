<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = $request->all();

        $category = Category::create($data);

        flash('Categoria Criada com Sucesso!')->success();
        return redirect()->route('categories');
    }

    public function edit($category)
    {
        $category = Category::findOrFail($category);

        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(CategoryUpdateRequest $request, $category)
    {
        $data = $request->all();

        $category = Category::find($category);
        $category->update($data);

        flash('Categoria Atualizada com Sucesso!')->success();
        return redirect()->route('categories');
    }

    public function destroy($category)
    {
        $category = Category::find($category);
        $category->delete();

        flash('Categoria Removida com Sucesso!')->success();
        return redirect()->route('categories');
    }
}
