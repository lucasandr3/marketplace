<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ThemeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'theme' => $this->theme,
            'bg_logo' => $this->bg_logo,
            'bg_header' => $this->bg_header,
            'bg_sidebar' => $this->bg_sidebar
        ];
    }
}
