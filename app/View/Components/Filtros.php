<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Filtros extends Component
{
    public $route;
    public $filters;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $filters)
    {
        $this->route = $route;
        $this->filters = $filters;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filtros');
    }
}
