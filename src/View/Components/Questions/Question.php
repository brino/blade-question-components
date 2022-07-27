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
     * @param null $parent
     * @param null $tooltip
     * @param null $name
     */
    public function __construct($label, $parent=null, $tooltip=null, $name=null)
    {

        $this->label = $label;
        $this->tooltip = $tooltip;
        $this->name = $name ?? Str::snake(str_replace(['!','?','.',',','-'],'',$label));
        if(isset($parent->{$this->name})) {
            $this->value = $parent->{$this->name};
        } else {
            $this->value = old($this->name) ?? request($this->name);

            if(is_numeric($this->value)) {
                if(strpos($this->value,'.')) {
                    $this->value = (float) $this->value;
                }
                $this->value = (integer) $this->value;
            }
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
