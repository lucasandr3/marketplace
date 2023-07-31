<?php

namespace App\Http\Services;

use App\Http\Interfaces\Repositories\ReportRepositoryInterface;
use App\Http\Interfaces\Services\ReportServiceInterface;
use App\Utils\Constants;
class ReportService implements ReportServiceInterface
{
    private $repository;

    public function __construct(ReportRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getSalesByLastYearAndCurrentYear()
    {
        $lastYear = date('Y') - 1;
        $currentYear = date('Y');

        $countedLastYearSales = $this->repository->getLastYear($lastYear);
        $countedCurrentYearSales = $this->repository->getCurrentYear($currentYear);

        $graphicLastYear = collect(Constants::ARRAYMONTHSQTDE);
        $countedLastYearSales->each(function ($value, $key) use ($graphicLastYear) {
            $graphicLastYear[(int)$key] = (int)$value;
        });

        $graphicCurrentYear = collect(Constants::ARRAYMONTHSQTDE);
        $countedCurrentYearSales->each(function ($value, $key) use ($graphicCurrentYear) {
            $graphicCurrentYear[(int)$key] = (int)$value;
        });

        return [
            'lastYear' => $graphicLastYear->values(),
            'currentyear' => $graphicCurrentYear->values()
        ];
    }

    public function getSalesByLastMonthAndCurrentMonth()
    {
        $tenant = auth()->id();
        $month = date('m');
        $lastYear = date('Y', strtotime('-1 year'));
        $currentYear = date('Y');
        $quantityDays = 15;

        $daysList = daysList(15, 'd/m');

        $listDaysSales = collect(daysList(15, 'Y-m-d'));
        $listLastDaysSales = collect(daysList(15, 'Y-m-d', true));

        $countedLastDaysMonthSales = $this->repository->getLastDaysMonth($lastYear, $tenant, $quantityDays);
        $countedCurrentDaysMonthSales = $this->repository->getCurrentDaysMonth($currentYear, $tenant, $quantityDays);

        $graphicCurrentMonth = $listDaysSales;
        $graphicLastMonth = $listLastDaysSales;
        $currentDaysMonth = collect();
        $lastDaysMonth = collect();

        for ($i = 0; $i <= $graphicCurrentMonth->count() - 1; $i++) {
            $currentDaysMonth[$graphicCurrentMonth[$i]] = 0;
            $lastDaysMonth[$graphicLastMonth[$i]] = 0;
        }

        $countedCurrentDaysMonthSales->each(function ($value, $key) use ($currentDaysMonth) {
            $currentDaysMonth[$key] = (int)$value;
        });

        $countedLastDaysMonthSales->each(function ($value, $key) use ($lastDaysMonth) {
            $lastDaysMonth[$key] = (int)$value;
        });

        return [
            'lastDaysMonth' => $lastDaysMonth->values(),
            'currentDaysMonth' => $currentDaysMonth->values(),
            'totalLastDays' => $lastDaysMonth->sum(),
            'totalCurrentDays' => $currentDaysMonth->sum(),
            'daysList' => $daysList
        ];
    }

    public function bestPlatforms()
    {
        return $this->repository->getBestPlatforms();
    }

    public function bestitems()
    {
        return $this->repository->getBestItems();
    }
}
