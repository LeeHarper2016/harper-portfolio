<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextSection extends Component
{
    public $section;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(TextComponent $section)
    {
        $this->section = $section;
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
