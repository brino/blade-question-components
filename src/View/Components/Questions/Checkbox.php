<?php

namespace BladeQuestions\View\Components\Questions;

class Checkbox extends Question
{
    protected $view = 'checkbox';

    public $choices;

    /**
     * @param $label
     * @param array $choices
     * @param $parent
     * @param $tooltip
     * @param $name
     */
    public function __construct($label, array $choices, $parent=null, $tooltip=null, $name=null)
    {
        parent::__construct($label, $parent, $tooltip, $name);
        $this->choices = $choices;
    }
}
