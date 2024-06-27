<x-guest-layout>
    <x-kit.auth-card>
        <!-- Session Status -->
        <div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <h1 class="text-3xl mb-4 font-heading font-bold">Login.</h1>
            <div class="flex font-light space-x-1 mb-3">
                <span>Don't have an account? </span>
                <a href="{{ route('register') }}" class="underline font-medium">Register</a>
            </div>
            <form method="POST" action="{{ route('login') }}" class="border-1 border-gray-300">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="grid grid-cols-1 items-center mt-4">
                    <x-kit.button>
                        {{ __('Log in') }}
                    </x-kit.button>
                    @if (Route::has('password.request'))
                        <a class="mt-3 underline text-center font-light text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>

        </div>
    </x-kit.auth-card>
</x-guest-layout>
