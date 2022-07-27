<?php

namespace BladeQuestions\View\Components\Questions;

class Checkbox extends Question
{
    protected $view = 'checkbox';

    public $choices;

    /**
     * @param $label
     * @param array $choices
     * @param $value
     * @param $tooltip
     * @param $name
     */
    public function __construct($label, array $choices, $value=null, $tooltip=null, $name=null)
    {
        parent::__construct($label, $value, $tooltip, $name);
        $this->choices = $choices;
    }
}
