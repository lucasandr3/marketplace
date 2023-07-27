<?php

namespace App\Observers\Store;

use App\Models\Store;
use Illuminate\Support\Str;

class StoreObserver
{
    public function creating(Store $store): void
    {
        $store->slug = Str::slug($store->name);
    }

    public function updating(Store $store): void
    {
        $store->slug = Str::slug($store->name);
    }
}
