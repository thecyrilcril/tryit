<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Preload Custom fonts -->
{{--         <link
          rel="preload"
          href="{{ Vite::asset('resources/css/fonts/Satoshi-Variable.woff2') }}"
          as="font"
          type="font/woff2"
          crossorigin="anonymous"
        /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        x-cloak
        x-data="$store.global.initialize"
        @scroll.window.throttle.50="onScroll"
        @resize.window="onScroll"
        @popstate.window="[setOnFaq, open=false]"
        x-init="async() => {
            await $nextTick(),
            onScroll(),
            setOnFaq(),
            $watch('onFaq', (value) => (value) ? $refs.faqs.scrollIntoView() : null)
        }"
        class="font-sans text-gray-900 antialiased min-h-screen relative grid grid-rows-[auto_1fr_auto] overflow-x-hidden z-0">
            @include('layouts.nav')
            <main>
                {{ $slot }}
            </main>
            @include('layouts.footer')
            <x-kit.scrolltotop />
    </body>
</html>
