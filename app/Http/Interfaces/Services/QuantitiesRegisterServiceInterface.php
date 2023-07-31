<?php

namespace App\Http\Interfaces\Services;

use Illuminate\Support\Collection;

interface QuantitiesRegisterServiceInterface
{
    public function quantitiesSettings(): Collection|int;
}
