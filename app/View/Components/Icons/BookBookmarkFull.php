<?php

namespace App\View\Components\Icons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookBookmarkFull extends Component
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
        <svg class="icon-square" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="56" height="56" rx="8" fill="{{ $fill }}"/><path d="M16.8004 50.3996H44.8004C46.3491 50.3996 47.6004 49.1484 47.6004 47.5996C47.6004 46.0509 46.3491 44.7996 44.8004 44.7996V38.9634C46.4279 38.3859 47.6004 36.8284 47.6004 34.9996V9.79961C47.6004 7.48086 45.7191 5.59961 43.4004 5.59961H39.2004V20.4221C39.2004 21.5159 38.3166 22.3996 37.2229 22.3996C36.6979 22.3996 36.1904 22.1896 35.8229 21.8221L32.2004 18.1996L28.5779 21.8221C28.2104 22.1896 27.7029 22.3996 27.1779 22.3996C26.0841 22.3996 25.2004 21.5159 25.2004 20.4221V5.59961H16.8004C12.1629 5.59961 8.40039 9.36211 8.40039 13.9996V41.9996C8.40039 46.6371 12.1629 50.3996 16.8004 50.3996ZM14.0004 41.9996C14.0004 40.4509 15.2516 39.1996 16.8004 39.1996H39.2004V44.7996H16.8004C15.2516 44.7996 14.0004 43.5484 14.0004 41.9996Z" fill="{{ $color }}"/></svg>
        blade;
    }
}
