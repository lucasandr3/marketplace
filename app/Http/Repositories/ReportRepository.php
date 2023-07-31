<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\Repositories\ReportRepositoryInterface;
use App\Models\UserOrder;
//use App\Models\ProcessWinsItems;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReportRepository implements ReportRepositoryInterface
{
    public function __construct(
        UserOrder $ordersEntity,
//        ProcessWinsItems $processWinsEntity
    )
    {
        $this->ordersEntity = $ordersEntity;
//        $this->processWinsEntity = $processWinsEntity;
    }

    public function getLastYear($lastYear)
    {
        return $this->ordersEntity->query()
            ->whereRaw("YEAR(created_at)={$lastYear}")
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->select(DB::raw('MONTH(created_at) as Mes, count(*) as Quantidade'))
            ->pluck('Quantidade','Mes');
    }

    public function getCurrentYear($currentYear)
    {
        return $this->ordersEntity->query()
            ->whereRaw("YEAR(created_at)={$currentYear}")
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->select(DB::raw('MONTH(created_at) as Mes, count(*) as Quantidade'))
            ->pluck('Quantidade','Mes');
    }

    public function getLastDaysMonth($lastYear, $tenant, $quantityDays)
    {
        return DB::table('user_orders')
            ->select('created_at as dia', DB::raw('count(*) as quantidade'))
            ->whereYear('created_at', '=', "{$lastYear}")
            ->whereBetween('created_at', [Carbon::now()->subYear(1)->subDays($quantityDays), Carbon::now()->subYear(1)])
            ->where('user_id', '=', $tenant)
            ->groupBy('created_at')
            ->pluck('quantidade','dia');
    }

    public function getCurrentDaysMonth($currentYear, $tenant, $quantityDays)
    {
        return DB::table('user_orders')
            ->select('created_at as dia', DB::raw('count(*) as quantidade'))
            ->whereYear('created_at', '=', "{$currentYear}")
            ->whereBetween('created_at', [Carbon::now()->subDays($quantityDays), Carbon::now()])
            ->where('user_id', '=', $tenant)
            ->groupBy('created_at')
            ->pluck('quantidade','dia');
    }

//    public function getLastMonth($lastYear, $month)
//    {
//        return $this->processEntity->query()
//            ->whereRaw("YEAR(init_session)={$lastYear}")
//            ->whereRaw("MONTH(init_session)={$month}")
//            ->groupBy(DB::raw('MONTH(init_session)'))
//            ->select(DB::raw('MONTH(init_session) as Mes, count(*) as Quantidade'))
//            ->pluck('Quantidade','Mes');
//    }
//
//    public function getCurrentMonth($currentYear, $month)
//    {
//        return $this->processEntity->query()
//            ->whereRaw("YEAR(init_session)={$currentYear}")
//            ->whereRaw("MONTH(init_session)={$month}")
//            ->groupBy(DB::raw('MONTH(init_session)'))
//            ->select(DB::raw('MONTH(init_session) as Mes, count(*) as Quantidade'))
//            ->pluck('Quantidade','Mes');
//    }
//
//    public function getBestPlatforms()
//    {
//        return $this->processEntity->query()
//            ->selectRaw('SUM(process.platform_id) as quantity, platform.platform')
//            ->join('platform', 'platform.id', '=', 'process.platform_id')
//            ->groupBy(['platform_id', 'platform'])
//            ->orderByDesc('quantity')
//            ->limit(5)
//            ->get();
//    }
//
//    public function getBestItems()
//    {
//        return $this->processWinsEntity->query()
//            ->selectRaw('SUM(process_item_wins.item_id) as quantity, items.item')
//                ->join('items', 'items.id', '=', 'process_item_wins.item_id')
//                ->groupBy(['item_id', 'item'])
//                ->orderByDesc('quantity')
//                ->limit(5)
//                ->get();
//    }
}
