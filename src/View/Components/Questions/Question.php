<?php

namespace BladeQuestions\View\Components\Questions;

use Illuminate\Support\Str;
use Illuminate\View\Component;

abstract class Question extends Component
{
    public $name;

    public $value;

    public $label;

    public $tooltip;

    protected $view = 'input';

    /**
     * Question constructor.
     *
     * @param $label
     * @param null $value
     * @param null $tooltip
     * @param null $name
     */
    public function __construct($label, $value=null, $tooltip=null, $name=null)
    {
        $this->label = $label;
        $this->tooltip = $tooltip;
        $this->name = $name ?? Str::snake(str_replace(['!','?','.',',','-'],'',$label));

        //set current value
        if(!empty($value) && is_object($value) && isset($value->{$this->name})) {

            $this->value = $value->{$this->name};

        } else {

            $this->value = old($this->name) ?? $value;

        }

        //typecast numeric strings
        if(is_numeric($this->value)) {

            if(strpos($this->value,'.')) {

                $this->value = (float) $this->value;

            }

            $this->value = (integer) $this->value;

        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {

        return view('question::components.questions.'.$this->view);

    }
}
