<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        {{--        <!-- Validation Errors -->--}}
        {{--        <x-validation-errors class="mb-4" :errors="$errors" />--}}

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <h1 class="text-center text-3xl">EPS</h1>
            <div>
                <x-input-label for="email" :value="__('Email')"/>

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required autofocus/>

                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button>{{ __('Log in') }}</x-primary-button>
            </div>
            <div class="flex items-center justify-center mt-4">
                <x-primary-button>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
