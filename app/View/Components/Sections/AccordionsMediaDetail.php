<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AccordionsMediaDetail extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $blurb,
        public string $heading,
        public array $accordions,
        public array $mediaset,
        public array $featureDetail = []
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sections.accordions-media-detail');
    }
}
