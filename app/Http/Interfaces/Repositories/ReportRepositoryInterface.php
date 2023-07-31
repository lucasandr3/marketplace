<?php

namespace App\Http\Interfaces\Repositories;

interface ReportRepositoryInterface
{
    public function getLastYear($lastYear);

    public function getCurrentYear($currentYear);

    public function getLastDaysMonth($currentYear, $tenant, $quantityDays);

    public function getCurrentDaysMonth($currentYear, $tenant, $quantityDays);

//    public function getLastMonth($lastYear, $month);
//
//    public function getCurrentMonth($currentYear, $month);
//
//    public function getBestPlatforms();
//
//    public function getBestItems();
}
