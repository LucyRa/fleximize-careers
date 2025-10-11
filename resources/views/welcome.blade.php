<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Fleximize Careers') }}</title>

        <!-- Core base styles -->
        <style>
            :root{font-size:16px;--black:#333;--white:#fff;--blue:#008abb;--lightblue:#daf1fa;--navy:#06435f;--yellow:#fda930}*,*::after,*::before{box-sizing:border-box;margin:0;padding:0}body{color:var(--black);font-family:"Open Sans",Arial,sans-serif;font-optical-sizing:auto;font-weight:400;font-style:normal;font-variation-settings:"wdth" 100;font-size:1.125rem;line-height:1.5}footer,header,main,nav,section{width:100%}
        </style>

        @stack('styles')

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
