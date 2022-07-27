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
     * @param null $value
     * @param null $name
     */
    public function __construct($label, array $options, $value=null, $name=null)
    {
        parent::__construct($label, $value, $name);
        $this->options = $options;
    }
}
