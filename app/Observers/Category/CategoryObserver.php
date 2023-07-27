<?php

namespace App\Observers\Category;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function creating(Category $category): void
    {
        $category->slug = Str::slug($category->name);
    }

    public function updating(Category $category): void
    {
        $category->slug = Str::slug($category->name);
    }
}
