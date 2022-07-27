<?php

namespace BladeQuestions\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('question::components.select');
    }
}
