<?php

namespace App\Http\Interfaces\Services;

interface ReportServiceInterface
{
    public function getSalesByLastYearAndCurrentYear();

    public function getSalesByLastMonthAndCurrentMonth();

    public function bestPlatforms();

    public function bestitems();
}
