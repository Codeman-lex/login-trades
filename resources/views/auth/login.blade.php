<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-luxury-white/70">Email</label>
            <input id="email" class="block mt-1 w-full bg-luxury-black/50 border-luxury-white/10 focus:border-luxury-gold focus:ring-luxury-gold/50 rounded-sm shadow-sm text-luxury-white" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-luxury-white/70">Password</label>
            <input id="password" class="block mt-1 w-full bg-luxury-black/50 border-luxury-white/10 focus:border-luxury-gold focus:ring-luxury-gold/50 rounded-sm shadow-sm text-luxury-white" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-luxury-white/10 bg-luxury-black/50 text-luxury-gold shadow-sm focus:ring-luxury-gold/50" name="remember">
                <span class="ms-2 text-sm text-luxury-white/60">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-luxury-white/40 hover:text-luxury-gold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-gold" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="ms-3 btn-primary">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>
