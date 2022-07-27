<?php

namespace BladeQuestions;

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
            'checkbox' => \BladeQuestions\View\Components\Questions\Checkbox::class,
            'radio' => \BladeQuestions\View\Components\Questions\Radio::class,
            'input' => \BladeQuestions\View\Components\Questions\Input::class,
            'select' => \BladeQuestions\View\Components\Questions\Select::class,
        ]);

        $this->loadViewComponentsAs('form', [
            'input' => \BladeQuestions\View\Components\Input::class,
            'select' => \BladeQuestions\View\Components\Select::class,
            'label' => \BladeQuestions\View\Components\Label::class,
            'tooltip' => \BladeQuestions\View\Components\Tooltip::class,
        ]);
    }
}