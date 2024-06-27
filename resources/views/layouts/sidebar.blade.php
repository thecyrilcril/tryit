<h2 class="font-semibold text-heading text-xl text-gray-800 leading-tight flex items-center py-1">
    <a href="{{ route('dashboard') }}">
        <x-icons.stack class="text-purple-600 w-12 h-12 w-auto" alt="kit logo" />
    </a>
    <p class="pl-1">Kit</p>
</h2>
<div class="mt-3">
    <nav class="flex flex-col text-lg font-light text-gray-500 gap-5">
        <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-1  {{ request()->routeIs('dashboard') ? 'text-purple-600 font-medium' : '' }}"
        >
            <x-icons.overview class="w-5 h-5" />
            <span class="font-medium">Overview</span>
        </a>
        <a href="#"
            class="flex items-center space-x-1  {{ request()->routeIs('profile') ? 'text-purple-600 font-medium' : '' }}"
        >
            <x-icons.user class="w-5 h-5" />
            <span class="font-medium">Profile</span>
        </a>
        <x-kit.sidebar-dropdown name="Dropdown">
            <x-slot name="icon">
                <x-icons.list class="h-5 w-5" />
            </x-slot>
            <a href="#"
                class="flex items-center space-x-1 {{ request()->routeIs('#') ? 'text-purple-600 font-medium' : '' }}"
            >
                <span class="font-medium text-base">Item One</span>
            </a>
            <a href="#"
                class="flex items-center space-x-1  {{ request()->routeIs('#') ? 'text-purple-600 font-medium' : '' }}"
            >
                <span class="font-medium text-base">Item Two</span>
            </a>
        </x-kit.sidebar-dropdown>
        <a href="#"
            class="flex items-center space-x-1  {{ request()->routeIs('support') ? 'text-purple-600 font-medium' : '' }}"
        >
            <x-icons.support class="h-5 w-5" />
            <span class="font-medium">Support</span>
        </a>
    </nav>
</div>
