<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::paginate(10);

        return view('admin.pages.categories.index', [
            'categories' => $categories,
            'filter' => []
        ]);
    }

    public function create(): View
    {
        return view('admin.pages.categories.create');
    }

    public function store(CategoryCreateRequest $request): RedirectResponse
    {
        $data = $request->all();

        $category = Category::create($data);

        flash('Categoria Criada com Sucesso!')->success();
        return redirect()->route('categories');
    }

    public function edit($category): View
    {
        $category = Category::findOrFail($category);

        return view('admin.pages.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(CategoryUpdateRequest $request, $category): RedirectResponse
    {
        $data = $request->all();

        $category = Category::find($category);
        $category->update($data);

        flash('Categoria Atualizada com Sucesso!')->success();
        return redirect()->route('categories');
    }

    public function destroy($category): RedirectResponse
    {
        $category = Category::find($category);

        if ($category->products()->count() > 0) {
            flash('Existe produtos cadastrados nesta categoria!')->warning();
            return redirect()->route('categories');
        }

        $category->delete();

        flash('Categoria Removida com Sucesso!')->success();
        return redirect()->route('categories');
    }
}
