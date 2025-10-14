<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GlassHalfFull extends Component
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
        <svg viewBox="0 0 24 24" fill="{{ $fill }}" xmlns="http://www.w3.org/2000/svg"><path d="M4.79961 4.09961C4.13586 4.09961 3.59961 4.63586 3.59961 5.29961V16.0996C3.59961 18.7509 5.74836 20.8996 8.39961 20.8996H15.5996C18.2509 20.8996 20.3996 18.7509 20.3996 16.0996V5.29961C20.3996 4.63586 19.8634 4.09961 19.1996 4.09961H4.79961ZM5.99961 12.4996V6.49961H17.9996V12.4996H5.99961Z" fill="{{ $color }}"/></svg>
        blade;
    }
}
