<?php

function filterItensByStoreId($items, $store): array
{
    return array_filter($items, function ($item) use ($store) {
        return $item->store_id === $store;
    });
}

function formatPriceToDatabase($price): array|string
{
    return str_replace(['.',','], ['','.'], $price);
}

function generateIdentifyOrder(int $qtyCaraceters = 8): string
{
    $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

    $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
    $numbers .= 1234567890;

    $characters = $smallLetters . $numbers;

    return strtoupper(substr(str_shuffle($characters), 0, $qtyCaraceters));
}
