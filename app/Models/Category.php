<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_category',
        'slug'
    ];

    public function departments() {
        return $this->hasMany(Department::class)->getResults();
    }

    public function divisions()
    {
        return $this->hasMany(SubDivision::class);
    }

    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
