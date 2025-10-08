<?php

namespace App\View\Components\Heros;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MediaDetail extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $keyword,
        public string $blurb,
        public string $media
    ) {
        $needle = "/" . $this->keyword . "/i";

        if (preg_match($needle, $this->title)) {
            $titleArr = preg_split($needle, $this->title, 2);

            $this->title = <<<HTML
                {$titleArr[0]} <span class="keyword">{$this->keyword}</span> {$titleArr[1]}
            HTML;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heros.media-detail');
    }
}
