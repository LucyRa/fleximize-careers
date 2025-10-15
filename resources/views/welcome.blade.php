<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Fleximize Careers') }}</title>

        <!-- Core base styles -->
        <style>
            :root{font-size:16px;--black:#333;--white:#fff;--midgrey:#444;--lightgrey:#f4f4f4;--blue:#008abb;--midblue:#186285;--lightblue:#daf1fa;--navy:#06435f;--yellow:#fda930;--navheight:2.5rem;--containerpad:2rem}*:focus-visible{outline:.25rem var(--blue) dashed}*,*::after,*::before{box-sizing:border-box;margin:0;padding:0}body{position:relative;min-height:100dvh;background-color:var(--navy);background-image:radial-gradient(farthest-corner at 80% -25%,var(--midblue) 8%,var(--navy) 54%);background-attachment:fixed;color:var(--black);font-family:"Open Sans",Arial,sans-serif;font-optical-sizing:auto;font-weight:400;font-style:normal;font-variation-settings:"wdth" 100;font-size:1.125rem;line-height:1.5;scroll-behaviour:smooth;}footer,header,main,nav,section{width:100vw;overflow:hidden}header{position:fixed;z-index:99;top:0;left:0;height:60px;background-color:var(--white)}main{display:flow-root}nav{justify-content:center}nav img{width:1.875rem;height:2.875rem}footer{height:20rem;background-color:var(--lightgrey);border-block-start:.25rem solid var(--navy)}p{max-width:70ch}section{scroll-margin-top: 2.5rem}section.p-b{padding-block:3.5rem 4.5rem}.container{width:calc(100vw - var(--containerpad));max-width:95rem;margin-inline:auto}@media only screen and (min-width:46.5rem){:root{--navheight:4rem;--containerpad:4rem}nav{justify-content:flex-start}nav img{width:10rem;height:2.813rem}}@media only screen and (min-width:67.5rem){main,section{overflow:visible}}@media only screen and (min-width:80rem){:root{--navheight:5rem;--containerpad:5rem}}@media only screen and (min-width:108rem){:root{--containerpad:12.75rem}}
        </style>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav style="display:flex;align-items:center;height:100%;">
                <div class="container">
                    <picture>
                    <source srcset="https://fleximize.com/images/fleximize-logo.png" media="(min-width: 46.5rem)" />
                    <img src="data:image/png;base64,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" />
                </picture>
                </div>
            </nav>
        </header>

        <livewire:breadcrumbs />

        <main>
            <!-- Hero -->
            <x-heros.media-detail title="join the Fleximize"
                keyword="Family"
                blurb="Fleximize is on a mission to empower small businesses to unleash the potential of their ideas with the knowledge, tools, and financial flexibility they need to thrive."
                :media="url('/') . '/img/CMO-character-3d.png'"
            />

            <!-- Content sections -->
            <x-sections.scroll-cards />

            <x-sections.feature-media-detail title="2025 Award Winners"
                subtitle="(BusinessUK Awards)"
                heading="FinTech Employer Award & Diversity and Inclusion Award"
                blurb="With an impressive 97% employee retention rate and a workplace culture that actively embraces different perspectives, Fleximize has demonstrated its dedication to nurturing talent and fostering an inclusive company culture."
                :media="url('/') . '/img/award.png'"
            />

            <x-sections.job-listings heading="Open Opportunities"
                blurb="Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur quis, montes porta nisi dictum habitasse ante ullamcorper est."
            />

            <x-sections.accordions-media-detail title="FlexFamily Values"
                blurb="We’re an exciting, fast-growing company with a dynamic team, and we’re always looking for the right people to join us."
                heading="We want people who are..."
                :$accordions
                :$mediaset
                :$featureDetail
            />
        </main>

        <!-- Fix to bottom and hide behind main to reveal on scroll. -->
        <!-- Main will need padding to match the height of the footer. -->
        <footer></footer>
    </body>
</html>
