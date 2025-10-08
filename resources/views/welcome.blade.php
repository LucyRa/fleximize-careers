<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Fleximize Careers') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>

        </style>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav></nav>
        </header>

        <main>
            <x-heros.media-detail title="We’re excited to welcome you to the family."
                keyword="you"
                blurb="Fleximize is on a mission to empower small businesses to unleash the potential of their ideas with the knowledge, tools, and financial flexibility they need to thrive."
                :media="url('/') . '/img/hiring.png'"
            />

            <!--
                COMPONENTS/SECTIONS:
                -
                -
                -
                -
            -->
        </main>

        <!-- Fix to bottom and hide behind main to reveal on scroll. -->
        <!-- Main will need padding to match the height of the footer. -->
        <footer>

        </footer>
    </body>
</html>
