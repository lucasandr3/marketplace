<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbCategory extends Component
{
    public ?object $filter;
    /**
     * Create a new component instance.
     */
    public function __construct(?object $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumb-category');
    }
}
