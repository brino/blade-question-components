<?php

namespace BladeQuestions;

use BladeQuestions\View\Components\Questions\Checkbox;
use BladeQuestions\View\Components\Questions\Input;
use BladeQuestions\View\Components\Input as FormInput;
use BladeQuestions\View\Components\Label as FormLabel;
use BladeQuestions\View\Components\Questions\Radio;
use BladeQuestions\View\Components\Questions\Select;
use BladeQuestions\View\Components\Select as FormSelect;
use BladeQuestions\View\Components\Tooltip as FormTooltip;
use Illuminate\Support\ServiceProvider;

class BladeQuestionsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'question');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/blade-questions'),
        ]);

        $this->loadViewComponentsAs('question', [
            'checkbox' => Checkbox::class,
            'radio' => Radio::class,
            'input' => Input::class,
            'select' => Select::class,
        ]);

        $this->loadViewComponentsAs('form', [
            'input' => FormInput::class,
            'select' => FormSelect::class,
            'label' => FormLabel::class,
            'tooltip' => FormTooltip::class,
        ]);
    }
}