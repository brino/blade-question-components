<?php

namespace BladeQuestions\View\Components\Questions;

class Input extends Question
{
    public $type;

    /**
     * Input constructor.
     *
     * @param $label
     * @param string $type
     * @param null $value
     * @param null $tooltip
     * @param null $name
     */
    public function __construct($label, $type='text', $value=null, $tooltip=null, $name=null)
    {
        parent::__construct($label, $value, $tooltip, $name);
        $this->type = $type;
    }
}
