<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
//        'store_id',
        'reference',
        'pagseguro_code',
        'pagseguro_status',
        'items'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function stores(): BelongsToMany
    {
        return $this->belongsToMany(Store::class, 'order_stores');
    }
}
