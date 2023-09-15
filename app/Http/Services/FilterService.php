<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

class FilterService
{
    public static function filter(Request $request): \stdClass
    {
        $term = $request->get('term');
        $value = $request->get('value');

        $filter = new \stdClass();
        $filter->term = null;
        $filter->value = null;

        if (!empty($term) && !empty($value)) {
            $filter->term = $term;
            $filter->value = $value;
        }

        return $filter;
    }
}
