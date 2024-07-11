<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboradBounder extends Component
{
    public $css;
    public $js;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($css,$js,$title)
    {
       $this->css = $css;
       $this->js = $js;
       $this->title = $title;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashborad-bounder',[
            'css' => $this->css,
            'title' => $this->title,
            'js' => $this->js
        ]);
    }
}
