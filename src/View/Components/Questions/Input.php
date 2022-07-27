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
     * @param null $parent
     * @param null $tooltip
     * @param null $name
     */
    public function __construct($label, $type='text', $parent=null, $tooltip=null, $name=null)
    {
        parent::__construct($label, $parent, $tooltip, $name);
        $this->type = $type;
    }
}
