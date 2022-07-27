<?php

namespace BladeQuestions\View\Components\Questions;

class Radio extends Question
{
    protected $view = 'radio';

    public $choices;

    /**
     * Radio constructor.
     *
     * @param $label
     * @param array $choices
     * @param null $value
     * @param null $tooltip
     * @param null $name
     */
    public function __construct($label, array $choices, $value=null, $tooltip=null, $name=null)
    {
        parent::__construct($label, $value, $tooltip, $name);
        $this->choices = $choices;
    }
}
