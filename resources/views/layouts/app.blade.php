<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        x-data="{
            showMobileSidebar: false,
            async init() {
                await $nextTick()
            }
        }"
        class="font-sans antialiased">
        <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] min-h-screen bg-gray-50">
            @if (isset($sidebar))
            {{-- Desktop Navigation --}}
            <aside class="hidden lg:grid bg-[#f1f3f4] w-[300px] place-items-start">
                <div class="w-full py-6 px-4 sm:px-6 lg:px-8">
                    {{ $sidebar }}
                </div>
            </aside>
            {{-- Mobile Navigation --}}
            <aside class="bg-[#f1f3f4] w-[300px] transition-transform transform-gpu lg:grid fixed h-screen z-40" :class="{'-translate-x-[300px]': !showMobileSidebar}">
                <div class="py-6 px-4 sm:px-6 lg:px-8">
                    {{ $sidebar }}
                </div>
            </aside>
            @else
            <div></div>
            @endif
            {{-- Content --}}
            <main>
                @include('layouts.dashboard-header')
                <div class="py-12">
                    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
