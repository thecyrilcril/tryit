<header
    x-ref="navbar"
    x-data="{
        async init() {
            await $nextTick(),
            this.navbarHeight = $refs.navbar.offsetHeight
        }
    }"
    class="sticky top-0 z-40">
    <nav
        class="relative z-50 bg-[#fff] lg:bg-transparent transition-colors duration-75"
        :class="{ 'lg:bg-white lg:shadow-sm' : yPosition > 40}"
    >
        <!-- Primary Navigation Menu -->
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 xl:px-0 py-8">
            <div>
                <a href="{{ route('home') }}">
                    <x-icons.stack class="text-purple-600 w-12 h-12 w-auto" alt="kit logo" />
                </a>
            </div>
            <div class="hidden lg:flex items-center space-x-4 font-medium text-lg">
                <a
                    href="{{ route('home') }}"
                    class="py-2 px-4 {{ request()->routeIs('home') ? 'text-purple-600' : '' }}"
                    :class="{ 'sm:text-[#334155]' : onFaq }"
                    title="home"
                >
                  Home
                </a>

                <a
                    href="{{ route('home') }}#faq"
                    class="py-2 px-4"
                    :class="{ 'text-purple-600' : onFaq }"
                    title="faq"
                >
                  Faq
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="py-2 px-4 {{ request()->routeIs('contact') ? 'text-purple-600' : '' }}"
                    title="contact us"
                >
                  Contact us
                </a>

                <a
                    href="{{ route('login') }}"
                    class="py-2 px-4 {{ request()->routeIs('login') ? 'text-purple-600' : '' }}"
                    title="sign in"
                >
                  Sign In
                </a>

                <a
                    href="{{ route('register') }}"
                    class="py-2 px-4 bg-purple-600 text-gray-50 rounded-lg"
                    title="sign up"
                >
                  Sign Up
                </a>
            </div>
            <button @click="open = !open" class="lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" x-bind:class="!open ? 'block' : 'hidden'" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" x-bind:class="!open ? 'hidden' : 'block'" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
        </div>
    </nav>
    <!-- Mobile Navigation Menu -->
    <nav x-show="open" @click.outside="open = false" class="lg:hidden grid grid-cols-1 space-y-2 pb-4 absolute w-full bg-white font-medium text-xl shadow-lg">
        <a
            href="{{ route('home') }}#faq"
            class="py-2 px-6"
            :class="{ 'text-purple-600' : onFaq }"
            title="faq"
        >
          Faq
        </a>

        <a
            href="{{ route('contact') }}"
            class="py-3 px-6 {{ request()->routeIs('contact') ? 'text-purple-600' : '' }}"
            title="contact us"
        >
          Contact us
        </a>


        <a
            href="{{ route('login') }}"
            class="py-3 px-6 {{ request()->routeIs('login') ? 'text-purple-600' : '' }}"
            title="sign in"
        >
          Sign In
        </a>

        <a
            href="{{ route('register') }}"
            class="py-3 px-6 bg-purple-600 rounded-lg text-purple-50 mx-6 text-center"
            title="sign up"
        >
          Sign Up
        </a>
    </nav>
</header>
