<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JobListings extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $heading,
        public string $blurb
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $results = [
            'jobs' => [
                [
                    'title' => 'Front-end Web Developer/Designer',
                    'body' => 'Shaping our digital products and delivering exceptional user experiences.',
                    'type' => 'Full-time',
                    'location' => 'Hybrid',
                    'link' => '#'
                ],
                [
                    'title' => 'Business Lending Trainee',
                    'body' => 'Focusing on administrative duties that primarily support the Relationship Management (Underwriting), Customer Care and Business Development Teams.',
                    'type' => 'Full-time',
                    'location' => 'On-site',
                    'link' => '#'
                ],
                [
                    'title' => 'Lorem Ipsum Dolor',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur quis.',
                    'type' => 'Part-time',
                    'location' => 'Remote',
                    'link' => '#'
                ],
                [
                    'title' => 'Lorem Ipsum Dolor',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur quis.',
                    'type' => 'Full-time',
                    'location' => 'On-site',
                    'link' => '#'
                ],
                [
                    'title' => 'Lorem Ipsum Dolor',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur quis.',
                    'type' => 'Part-time',
                    'location' => 'Remote',
                    'link' => '#'
                ],
                [
                    'title' => 'Lorem Ipsum Dolor',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur quis.',
                    'type' => 'Full-time',
                    'location' => 'Hybrid',
                    'link' => '#'
                ],
            ],
            'empty' => [
                'title' => 'No current openings.',
                'body' => 'We believe in slow & steady growth, bringing in only those we need. Coupled with a 97% retention rate, it means that new job openings can be few and far between. If you feel that Fleximize is the employer for you, check back regularly.'
            ]
        ];
        return view('components.sections.job-listings', [
            'results' => $results
        ]);
    }
}
