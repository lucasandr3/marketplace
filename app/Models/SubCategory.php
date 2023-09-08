<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

    public function category() {
        return $this->belongsTo(Category::class)->getResults();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product', 'sub_category_id', 'product_id')->getResults();
    }
}
