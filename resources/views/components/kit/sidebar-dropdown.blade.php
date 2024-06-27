@props([
    'name'
])
<div
    x-data="{
        open: false,
        async init() {
            await $nextTick()
        }
    }"
>
    <button @click.prevent.stop="open = !open"
        class="flex place-items-center space-x-1 font-medium"
        :class="{ 'text-purple-600' : open }"
    >
        @if (isset($icon))
            {{ $icon }}
        @else
            <x-icons.list class="h-5 w-5" />
        @endif
        <span class="capitalize">{{ $name }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-5 h-4 mt-1 transform-gpu transition-transform duration-200 ease-in-out"
            :class="{ 'rotate-90' : open }"
        >
            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
        </svg>


    </button>
    <div
        x-cloak
        x-ref="{{ strtolower($name) }}"
        class="grid grid-rows-[0fr] ml-5 transition-all duration-300 space-y-3"
        :class="{'mt-3 grid-rows-[1fr]' : open}"
    >
        <div class="overflow-y-hidden space-y-3">
            {{ $slot }}
        </div>
    </div>

</div>
