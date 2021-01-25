<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ticket to Ride') }}</title>

        <!-- Fonts -->
        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Light.woff')) }}" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Light.woff2')) }}" as="font" type="font/woff2" crossorigin>

        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Regular.woff')) }}" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Regular.woff2')) }}" as="font" type="font/woff2" crossorigin>

        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Medium.woff')) }}" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Medium.woff2')) }}" as="font" type="font/woff2" crossorigin>

        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-SemiBold.woff')) }}" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-SemiBold.woff2')) }}" as="font" type="font/woff2" crossorigin>

        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Bold.woff')) }}" as="font" type="font/woff" crossorigin>
        <link rel="preload" href="{{ asset(mix('fonts/FiraSans-Bold.woff2')) }}" as="font" type="font/woff2" crossorigin>

        <style>
            @font-face {
                font-family: 'Fira Sans';
                src: url('{{ asset(mix('fonts/FiraSans-Light.eot')) }}') format('embedded-opentype'),
                url('{{ asset(mix('fonts/FiraSans-Light.woff2')) }}') format('woff2'),
                url('{{ asset(mix('fonts/FiraSans-Light.woff')) }}') format('woff'),
                url('{{ asset(mix('fonts/FiraSans-Light.ttf')) }}') format('truetype'),
                url('{{ asset(mix('fonts/FiraSans-Light.svg')) }}#FiraSans-Light') format('svg');
                font-weight: 300;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Fira Sans';
                src: url('{{ asset(mix('fonts/FiraSans-Regular.eot')) }}') format('embedded-opentype'),
                url('{{ asset(mix('fonts/FiraSans-Regular.woff2')) }}') format('woff2'),
                url('{{ asset(mix('fonts/FiraSans-Regular.woff')) }}') format('woff'),
                url('{{ asset(mix('fonts/FiraSans-Regular.ttf')) }}') format('truetype'),
                url('{{ asset(mix('fonts/FiraSans-Regular.svg')) }}#FiraSans-Regular') format('svg');
                font-weight: 400;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Fira Sans';
                src: url('{{ asset(mix('fonts/FiraSans-Medium.eot')) }}') format('embedded-opentype'),
                url('{{ asset(mix('fonts/FiraSans-Medium.woff2')) }}') format('woff2'),
                url('{{ asset(mix('fonts/FiraSans-Medium.woff')) }}') format('woff'),
                url('{{ asset(mix('fonts/FiraSans-Medium.ttf')) }}') format('truetype'),
                url('{{ asset(mix('fonts/FiraSans-Medium.svg')) }}#FiraSans-Medium') format('svg');
                font-weight: 500;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Fira Sans';
                src: url('{{ asset(mix('fonts/FiraSans-SemiBold.eot')) }}') format('embedded-opentype'),
                url('{{ asset(mix('fonts/FiraSans-SemiBold.woff2')) }}') format('woff2'),
                url('{{ asset(mix('fonts/FiraSans-SemiBold.woff')) }}') format('woff'),
                url('{{ asset(mix('fonts/FiraSans-SemiBold.ttf')) }}') format('truetype'),
                url('{{ asset(mix('fonts/FiraSans-SemiBold.svg')) }}#FiraSans-SemiBold') format('svg');
                font-weight: 600;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Fira Sans';
                src: url('{{ asset(mix('fonts/FiraSans-Bold.eot')) }}') format('embedded-opentype'),
                url('{{ asset(mix('fonts/FiraSans-Bold.woff2')) }}') format('woff2'),
                url('{{ asset(mix('fonts/FiraSans-Bold.woff')) }}') format('woff'),
                url('{{ asset(mix('fonts/FiraSans-Bold.ttf')) }}') format('truetype'),
                url('{{ asset(mix('fonts/FiraSans-Bold.svg')) }}#FiraSans-Bold') format('svg');
                font-weight: 700;
                font-style: normal;
                font-display: swap;
            }
        </style>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        @yield('scripts')
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
