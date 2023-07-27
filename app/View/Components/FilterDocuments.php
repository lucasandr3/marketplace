<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterDocuments extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($typeDocuments, $unit)
    {
        $this->typeDocuments = $typeDocuments;
        $this->unit = $unit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter-documents');
    }

    public function typeDocuments()
    {
        return $this->typeDocuments;
    }

    public function unit()
    {
        return $this->unit;
    }
}
