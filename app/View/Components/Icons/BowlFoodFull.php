<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BowlFoodFull extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $fill = '#06435F',
        public string $color = '#FFFFFF'
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <svg class="icon-square" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="56" height="56" rx="8" fill="{{ $fill }}"/><path d="M5.59961 21C5.59961 17.9113 8.11086 15.4 11.1996 15.4C11.2434 15.4 11.2959 15.4 11.3396 15.4C11.9871 12.2062 14.8134 9.8 18.1996 9.8C19.5121 9.8 20.7371 10.1587 21.7784 10.78C22.9421 8.53125 25.2871 7 27.9996 7C30.7121 7 33.0571 8.54 34.2209 10.78C35.2709 10.1587 36.4959 9.8 37.7996 9.8C41.1859 9.8 44.0121 12.2062 44.6596 15.4C44.7034 15.4 44.7559 15.4 44.7996 15.4C47.8884 15.4 50.3996 17.9113 50.3996 21C50.3996 22.0237 50.1284 22.9775 49.6471 23.8H6.35211C5.87086 22.9775 5.59961 22.0237 5.59961 21ZM5.59961 30.3975C5.59961 29.0762 6.67586 28 7.99711 28H47.9934C49.3146 28 50.3909 29.0762 50.3909 30.3975C50.3909 36.5662 46.5059 41.8337 41.0546 43.8812L40.9059 45.15C40.7309 46.55 39.5409 47.6 38.1234 47.6H17.8671C16.4584 47.6 15.2596 46.55 15.0846 45.15L14.9271 43.89C9.48461 41.8338 5.59961 36.5662 5.59961 30.3975Z" fill="{{ $color }}"/></svg>
        blade;
    }
}
