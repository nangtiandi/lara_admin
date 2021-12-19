<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $routeName,$name,$icon;
    public function __construct($routeName,$name,$icon)
    {
        $this->routeName = $routeName;
        $this->name = $name;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-link');
    }
}
