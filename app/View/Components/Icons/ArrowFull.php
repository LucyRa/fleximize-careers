<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArrowFull extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $fill,
        public string $color = '#FFFFFF'
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
            <svg class="icon-round" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="40" height="40" rx="20" fill="{{ $fill }}"/><path d="M19.1523 29.2479C19.6211 29.7166 20.3823 29.7166 20.8511 29.2479L26.8511 23.2479C27.3198 22.7791 27.3198 22.0179 26.8511 21.5491C26.3823 21.0804 25.6211 21.0804 25.1523 21.5491L21.1998 25.5016V11.6004C21.1998 10.9366 20.6636 10.4004 19.9998 10.4004C19.3361 10.4004 18.7998 10.9366 18.7998 11.6004V25.5016L14.8473 21.5491C14.3786 21.0804 13.6173 21.0804 13.1486 21.5491C12.6798 22.0179 12.6798 22.7791 13.1486 23.2479L19.1486 29.2479H19.1523Z" fill="{{ $color }}"/></svg>
        blade;
    }
}
