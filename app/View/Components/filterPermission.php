<?php

namespace App\View\Components;

use Illuminate\View\Component;

class filterPermission extends Component
{
    public $targetId;
    public $route;
    public $newRegister;
    public $showBtn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($targetId, $route, $newRegister, $showBtn)
    {
        $this->targetId = $targetId;
        $this->route = $route;
        $this->newRegister = $newRegister;
        $this->showBtn = $showBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter-permission');
    }
}
