<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScrollCards extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $cards = [
            [
                'icon' => 'coins-full',
                'title' => 'Competitive Salary',
                'blurb' => 'Equal pay, and a juicy pension scheme. With salaries reviewed every year.'
            ],
            [
                'icon' => 'calendar-days-full',
                'title' => 'Generous Holiday',
                'blurb' => '25 days off every year, PLUS you get your birthday too!'
            ],
            [
                'icon' => 'book-bookmark-full',
                'title' => 'Professional Development',
                'blurb' => 'We will support you to keep growing in your role.'
            ],
            [
                'icon' => 'heart-pulse-full',
                'title' => 'Health & Wellbeing',
                'blurb' => 'From private health insurance, to generous sick-pay.'
            ],
            [
                'icon' => 'gift-full',
                'title' => 'Exclusive Discounts',
                'blurb' => 'Exclusive discounts & offers at thousands of stores.'
            ],
            [
                'icon' => 'bowl-food-full',
                'title' => 'Daily Breakfast',
                'blurb' => 'Free breakfast everyday that you’re in the office.'
            ],
            [
                'icon' => 'multi-full',
                'title' => 'Regular Socials',
                'blurb' => 'From regular team outings to fun in the office.'
            ],
        ];
        return view('components.sections.scroll-cards', [
           'cards' => $cards
        ]);
    }
}
