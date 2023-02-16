<style>
.min-h-screen.flex.flex-col.sm\:justify-center.items-center.pt-6.sm\:pt-0.bg-gray-100 {
  background: rgb(132 204 22 / var(--tw-bg-opacity));
}

img {
 
 height: 200px !important;
 width: 100% !important;
 margin-bottom: 40px;
}

.w-full.sm\:max-w-md.mt-6.px-6.py-4.bg-white.shadow-md.overflow-hidden.sm\:rounded-lg {
  background: rgb(30 58 138 / var(--tw-bg-opacity));
}
.block.font-medium.text-sm.text-gray-700 {
  color: #84cc16;
}
.underline.text-sm.text-gray-600.hover\:text-gray-900.rounded-md.focus\:outline-none.focus\:ring-2.focus\:ring-offset-2.focus\:ring-indigo-500 {
  color: #84cc16;
}

.inline-flex.items-center.px-4.py-2.bg-blue-700.border.border-transparent.rounded-md.font-semibold.text-xs.text-yellow-400.uppercase.tracking-widest.hover\:bg-blue-600.focus\:bg-blue-700.active\:bg-blue-800.focus\:outline-none.focus\:ring-2.focus\:ring-indigo-500.focus\:ring-offset-2.transition.ease-in-out.duration-150.ml-4 {
  background: #84cc16;
  color: #1e3a8a;
}


    </style>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                {{-- info text --}}
                <p class="text-sm text-red-500 dark:text-red-400">
                    <span class="font-bold">Let op!</span> Registreer met je curio email adres. Andere email adressen zijn niet toegestaan.
                </p>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
