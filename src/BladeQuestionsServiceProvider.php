<?php

namespace BladeQuestions;

use BladeQuestions\View\Components\Checkbox;
use BladeQuestions\View\Components\Input;
use BladeQuestions\View\Components\Radio;
use BladeQuestions\View\Components\Select;
use Illuminate\Support\ServiceProvider;

class BladeQuestionsServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    private const PATH_VIEWS = __DIR__ . '../resources/views/';

    public function boot(): void
    {
        $this->loadViewComponentsAs('question', $this->viewComponents());
    }

    protected function viewComponents(): array
    {
        return [
            Checkbox::class,
            Radio::class,
            Input::class,
            Select::class,
        ];
    }

}