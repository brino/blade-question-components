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
     * @param null $parent
     * @param null $tooltip
     * @param null $name
     */
    public function __construct($label, array $choices, $parent=null, $tooltip=null, $name=null)
    {
        parent::__construct($label, $parent, $tooltip, $name);
        $this->choices = $choices;
    }
}
