<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'shipping_name',
        'shipping_code_contract',
        'shipping_pass_contract',
        'shipping_zipcode',
        'shipping_tax',
        'shipping_active'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
