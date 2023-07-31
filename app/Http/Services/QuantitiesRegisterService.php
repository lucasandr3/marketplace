<?php

namespace App\Http\Services;

use App\Http\Interfaces\Services\QuantitiesRegisterServiceInterface;
use App\Models\Department;
use App\Models\Judgment;
use App\Models\Modality;
use App\Models\Platform;
use App\Models\Process;
use App\Models\Steps;
use App\Models\Store;
use App\Models\TypeDocument;
use App\Models\Units;
use App\Models\UserOrder;
use App\Models\UserQuotation;
use Illuminate\Support\Collection;

class QuantitiesRegisterService implements QuantitiesRegisterServiceInterface
{
    public function quantitiesSettings(): Collection|int
    {
        return collect([
            'salesYear' => UserOrder::all()->count(),
            'quotations' => UserQuotation::all()->count(),
            'totalOrders' => UserOrder::all()->count(),
            'totalStores' => Store::where('user_id', auth()->id())->count()
//            'quantityDepartments' => Department::all()->count(),
//            'quantityPlatforms' => Platform::all()->count(),
//            'quantityTypeDocuments' => TypeDocument::all()->count(),
//            'quantityModalities' => Modality::all()->count(),
//            'quantityJudgments' => Judgment::all()->count(),
//            'quantitySteps' => Steps::all()->count()
        ]);
    }
}
