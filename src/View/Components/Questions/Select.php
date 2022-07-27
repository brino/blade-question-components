<?php

namespace BladeQuestions\View\Components\Questions;

class Select extends Question
{
    protected $view = 'select';

    public $options;

    /**
     * Select constructor.
     *
     * @param $label
     * @param array $options
     * @param null $parent
     * @param null $name
     */
    public function __construct($label, array $options, $parent=null, $name=null)
    {
        parent::__construct($label, $parent, $name);
        $this->options = $options;
    }
}
