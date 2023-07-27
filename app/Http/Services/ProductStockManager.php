<?php

namespace App\Http\Services;

use App\Models\Product;
use App\Models\UserOrder;

class ProductStockManager
{
    private UserOrder $dataItens;

    public function __construct(UserOrder $dataItens)
    {
        $this->dataItens = $dataItens;
    }

    public function removeProductFromStock()
    {
        foreach (json_decode($this->dataItens->items) as $item) {
            Product::where('slug', $item->slug)->first()->decrement('in_stock', $item->quantity);
        }
    }

    public function addingProductInStock()
    {
        foreach ($this->dataItens as $item) {
            Product::where('slug', $item->slug)->first()->increment('in_stock', $item->quantity);
        }
    }
}
