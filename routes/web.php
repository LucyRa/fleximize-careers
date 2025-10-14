<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $accordions = [
        ['icon' => 'pizza-full', 'summary' => 'Hungry for more', 'details' => "We're rapidly growing, and want people that are motivated by, and want to be a part of, that success."],
        ['icon' => 'box-open-full', 'summary' => 'Out-of-the-box thinkers', 'details' => "Every business that comes to us is different from the next, and we look for logical, common-sense solutions to meet their unique needs."],
        ['icon' => 'emoji-hearts-full', 'summary' => 'Passionate', 'details' => "Entrepreneurs put their heart and soul into their business, and the least we can do is put OUR heart and soul into helping them."],
        ['icon' => 'hands-holding-full', 'summary' => 'Helpful', 'details' => "Our customers often have bigger things to worry about than their application, not least the day-to-day running of their business. We need people to be understanding, patient, and helpful."],
        ['icon' => 'ski-down-full', 'summary' => 'Independent', 'details' => "You'll need to be able to motivate yourself when you walk through the door every morning, and be able to work independently and with other teams."],
        ['icon' => 'glass-half-full', 'summary' => 'Glass-half-full', 'details' => "We're in a fast-paced environment, and we face ups and downs every day. We need our people to be open-minded, positive and resilient."],
        ['icon' => 'rocket-full', 'summary' => 'Adaptable', 'details' => "We're a close-knit team, and everyone mucks in together. Ideas are drawn from across the company on things like product updates, web development and marketing."],
        ['icon' => 'team-full', 'summary' => 'Team players', 'details' => "Everyone gets on with each other at Flex HQ. We want you to be understanding, considerate, and kind."],
    ];

    $featureDetail = ['icon' => 'globe-eu-full','title'=>'Inclusive of all', 'body'=> 'In 2022 we refreshed our employee values; we are positive in everything that we do, respectful, involved, diligent, and excellent at what we do. Most importantly, we take pride in creating an environment where everyone can bring their authentic selves to work and make it easy for others to do the same.'];

    $mediaset = [url('/') . '/img/flex-fam-1.png', url('/') . '/img/flex-fam-2.jpg', url('/') . '/img/flex-fam-3.jpg', url('/') . '/img/flex-fam-4.png'];

    return view('welcome', [
        'accordions' => $accordions,
        'featureDetail' => $featureDetail,
        'mediaset' => $mediaset
    ]);
});
