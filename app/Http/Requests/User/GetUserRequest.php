<?php

namespace App\Http\Requests\User;

use App\Services\FilterService;
use Illuminate\Foundation\Http\FormRequest;

class GetUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function filters()
    {
        if (!empty($this->all())) {
            $filterService = new FilterService();
            $filters = array_filter($this->all());
            return $filterService->prepareFilters($filters);
        }

        return [];
    }
}
