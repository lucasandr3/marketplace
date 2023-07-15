<?php

function filterItensByStoreId($items, $store): array
{
    return array_filter($items, function ($item) use ($store) {
        return $item->store_id === $store;
    });
}
