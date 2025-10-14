<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RocketFull extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $fill = 'none',
        public string $color = '#FFFFFF'
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <svg viewBox="0 0 24 24" fill="{{ $fill }}" xmlns="http://www.w3.org/2000/svg"><path d="M7.20019 14.9H3.31894C2.38519 14.9 1.81144 13.8837 2.29144 13.0812L4.27519 9.77373C4.60144 9.22998 5.18644 8.89998 5.82019 8.89998H9.38269C12.2364 4.06623 16.4927 3.82248 19.3389 4.23873C19.8189 4.30998 20.1939 4.68498 20.2614 5.16123C20.6777 8.00748 20.4339 12.2637 15.6002 15.1175V18.68C15.6002 19.3137 15.2702 19.8987 14.7264 20.225L11.4189 22.2087C10.6202 22.6887 9.60019 22.1112 9.60019 21.1812V17.3C9.60019 15.9762 8.52394 14.9 7.20019 14.9ZM17.4002 8.89998C17.4002 7.90623 16.5939 7.09998 15.6002 7.09998C14.6064 7.09998 13.8002 7.90623 13.8002 8.89998C13.8002 9.89373 14.6064 10.7 15.6002 10.7C16.5939 10.7 17.4002 9.89373 17.4002 8.89998Z" fill="{{ $color }}"/></svg>
        blade;
    }
}
