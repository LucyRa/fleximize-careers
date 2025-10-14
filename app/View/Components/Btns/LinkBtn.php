<?php

namespace App\View\Components\Btns;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkBtn extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $cta,
        public string $url,
        public $icon = "",
        public bool $external = false
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <a href="{{ $url }}" class="btn--link" @if($external)target="_blank"@endif>
            <span>{{ $cta }}</span>
            @if($icon != "")
            <x-dynamic-component :component="'icons.' . $icon" fill="transparent" color="#444" />
            @endif
        </a>
        blade;
    }
}
