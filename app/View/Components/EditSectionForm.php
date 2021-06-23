<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditSectionForm extends Component
{
    public $anchor;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($anchor)
    {
        $this->anchor = $anchor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit-section-form');
    }
}