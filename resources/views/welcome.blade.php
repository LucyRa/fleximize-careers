<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Fleximize Careers') }}</title>

        <!-- Core base styles -->
        <style>
            :root {
                font-size: 16px;
                --black: #333;
                --white: #fff;
                --blue: #008abb;
                --midblue: #186285;
                --lightblue: #daf1fa;
                --navy: #06435f;
                --yellow: #fda930;
                --navheight: 2.5rem;
            }
            *,
            *::after,
            *::before {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            body {
                position: relative;
                min-height: 100dvh;
                background-color: var(--navy);
                background-image: radial-gradient(farthest-corner at 100% 0%,
                    var(--midblue) 0%,
                    var(--navy) 100%);
                color: var(--black);
                font-family: "Open Sans", Arial, sans-serif;
                font-optical-sizing: auto;
                font-weight: 400;
                font-style: normal;
                font-variation-settings: "wdth" 100;
                font-size: 1.125rem;
                line-height: 1.5;
            }
            footer,
            header,
            main,
            nav,
            section {
                width: 100vw;
                overflow: hidden;
            }
            header {
                position: fixed;
                z-index: 99;
                top: 0;
                left: 0;
                height: 60px;
                background-color: var(--white);
            }
            main {
                display: flow-root;
            }
            .container{
                width: calc(100vw - 2rem);
                margin-inline: auto;
            }
            @media only screen and (min-width: 46.5rem) {
                :root {
                    --navheight: 4rem;
                }
            }
        </style>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')
    </head>
    <body>
        <header>
            <nav></nav>
        </header>

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

            <x-sections.job-listings />

            <x-sections.accordions-media-detail />
        </main>

        <!-- Fix to bottom and hide behind main to reveal on scroll. -->
        <!-- Main will need padding to match the height of the footer. -->
        <footer>

        </footer>
    </body>
</html>
