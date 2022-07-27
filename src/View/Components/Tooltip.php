<?php

namespace BladeQuestions\View\Components;

use Illuminate\View\Component;

class Tooltip extends Component
{
    public $notch;

    public function __construct($notch = 'left') {
        $this->notch = $notch;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('question::components.tooltip');
    }
}
