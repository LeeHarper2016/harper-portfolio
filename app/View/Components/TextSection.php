<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextSection extends Component
{
    public $section;
    public $anchor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($section, $anchor)
    {
        $this->section = $section;
        $this->anchor = $anchor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-section');
    }
}
