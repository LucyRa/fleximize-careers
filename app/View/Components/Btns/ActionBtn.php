<?php

namespace App\View\Components\Btns;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionBtn extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $cta,
        public string $icon,
        public string $action,
        public string $target = "",
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <button class="btn--action" type="button" data-action="{{ $action }}" @if($target != "")data-action-target="{{ $target }}"@endif>
            <span>{{ $cta }}</span>
            <x-dynamic-component :component="'icons.' . $icon" fill="#06435f" />
        </button>
        blade;
    }
}
