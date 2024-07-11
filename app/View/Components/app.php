<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class app extends Component
{
    public $css;
    /**
     * Create a new component instance.
     */
    public function __construct($css)
    {
       $this->css = $css;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() : View|Closure|string 
    {
        return view('components.app',[
            'css' => $this->css
        ]);
    }
}
