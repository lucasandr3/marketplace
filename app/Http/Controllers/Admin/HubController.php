<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Services\ReportServiceInterface;
use App\Http\Services\QuantitiesRegisterService;
use Illuminate\Http\Request;

class HubController extends Controller
{
    private QuantitiesRegisterService $quantityService;
    private ReportServiceInterface $reportService;

    public function __construct(
        QuantitiesRegisterService $quantityService,
        ReportServiceInterface $reportService
    )
    {
        $this->quantityService = $quantityService;
        $this->reportService = $reportService;
    }

    public function index()
    {
        return view('admin.pages.dashboard.index', [
            'totalSalesYear' => $this->quantityService->quantitiesSettings()->get('salesYear'),
            'total_users' => 0,
            'total_orders' => $this->quantityService->quantitiesSettings()->get('totalOrders'),
            'total_plans' => 0,
            'total_roles' => 0,
            'total_profiles' => 0,
            'total_permissions' => 0,
            'totalQuotations' => $this->quantityService->quantitiesSettings()->get('quotations')
        ]);
    }

    public function graphicbars()
    {
        $quantitiesSalesLastAndCurrentYear = $this->reportService->getSalesByLastYearAndCurrentYear();
        return response()->json(['data' => $quantitiesSalesLastAndCurrentYear]);
    }

    public function graphicline()
    {
        $quantitiesSalesLastAndCurrentMonth = $this->reportService->getSalesByLastMonthAndCurrentMonth();
        return response()->json(['data' => $quantitiesSalesLastAndCurrentMonth]);
    }

    public function bestplatforms()
    {
        $bestPlatforms = $this->reportService->bestPlatforms();
        return response()->json(['data' => $bestPlatforms]);
    }

    public function bestitems()
    {
        $bestitems = $this->reportService->bestitems();
        return response()->json(['data' => $bestitems]);
    }
}
