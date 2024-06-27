<div class="relative overflow-x-hidden">
    <x-kit.splide carousel_name="features" type="loop" autoplay="play" per_page="2" per_move="1" gap="2" speed="600" arrows="false">
        <x-slot name="items">
            {{ $slot }}
        </x-slot>
    </x-kit.splide>
</div>
