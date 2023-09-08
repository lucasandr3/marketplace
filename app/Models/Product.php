<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'body',
        'price',
        'slug'
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(Department::class, 'category_product', 'product_id', 'department_id');
    }

    public function subdivisions(): BelongsToMany
    {
        return $this->belongsToMany(SubDivision::class, 'category_product', 'product_id', 'sub_division_id');
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class, 'brand_product', 'product_id', 'brand_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductPhotos::class);
    }
}
