<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BoxOpenFull extends Component
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
        <svg viewBox="0 0 24 24" fill="{{ $fill }}" xmlns="http://www.w3.org/2000/svg"><path d="M21.0114 11.7951C21.4014 12.2376 22.0727 12.3351 22.5789 12.0013C23.1302 11.6338 23.2802 10.8876 22.9127 10.3363L21.1127 7.63633C21.0077 7.47883 20.8652 7.34758 20.6964 7.25383L13.1777 3.07633C12.4539 2.67508 11.5727 2.67508 10.8452 3.07633L3.33015 7.25008C3.12765 7.36258 2.9664 7.52758 2.85765 7.73008L1.0389 11.1013C0.566403 11.9788 0.896403 13.0701 1.7739 13.5426L3.0114 14.2063V16.2051C3.0114 17.0676 3.4764 17.8663 4.2264 18.2938L10.8264 22.0326C11.5614 22.4488 12.4577 22.4488 13.1927 22.0326L19.7927 18.2938C20.5464 17.8663 21.0077 17.0713 21.0077 16.2051V11.7988L21.0114 11.7951ZM12.0114 11.4276L6.38265 8.30008L12.0114 5.17258L17.6402 8.30008L12.0114 11.4276ZM10.4552 13.3101L9.6564 15.0426L3.4389 11.7126L4.3914 9.94258L10.4552 13.3101Z" fill="{{ $color }}"/></svg>
        blade;
    }
}
