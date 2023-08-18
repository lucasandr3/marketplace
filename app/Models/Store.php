<?php

namespace App\Models;

use App\Notifications\StoreReceiveNewOrder;
use App\Notifications\StoreReceiveNewQuotation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'phone',
        'mobile_phone',
        'slug',
        'logo'
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(UserOrder::class, 'order_stores');
    }

    public function notifyStoreOwners(array $codStores = [])
    {
        $stores = $this->whereIn('id', $codStores)->get();

        $stores->map(function($store){
            return $store->owner()->first();
        })->each->notify(new StoreReceiveNewOrder());
    }

    public function quotations(): BelongsToMany
    {
        return $this->belongsToMany(UserQuotation::class, 'quotation_stores');
    }

    public function notifyQuotationStoreOwners(array $codStores = [])
    {
        $stores = $this->whereIn('id', $codStores)->get();

        $stores->map(function($store){
            return $store->owner()->first();
        })->each->notify(new StoreReceiveNewQuotation());
    }

    public function shipping()
    {
        return $this->hasMany(Shipping::class);
    }
}
