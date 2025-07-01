<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $label;
    public $name;
    // public $textarea;
    public function __construct($type, $name, $label)
    {
        $this->type=$type;
        $this->label=$label;
        $this->name=$name;
        // $this->textarea=$textarea;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
