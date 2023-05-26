<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- URL --}}
        <link rel="icon" href="/storage/image/logo.png" type="image/png"/>

        {{-- FontAwesome CDN --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

        {{-- Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <header>

        @include('layouts.navigation')

    </header>

    <main class="flex flex-col h-screen">
        <div class="flex flex-col md:flex-row flex-grow">
            @include('layouts.sidebar')
            <section class="overflow-x-hidden">
                <div id="main" class="bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                    <div class="bg-gray-800 pt-3 md:ml-48 md:pt-12">
                        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                            <h1 class="font-bold pl-2">
                                {{ config('app.name', 'Laravel') }}
                            </h1>
                        </div>
                    </div>
                    <div class="md:ml-48 md:pt-20 w-screen min-h-screen">
                        {{ $slot }}
                    </div>
                </div>
            </section>
        </div>
    </main>






    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

    </body>

</html>
