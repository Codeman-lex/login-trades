<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-luxury-white/70">Name</label>
            <input id="name" class="block mt-1 w-full bg-luxury-black/50 border-luxury-white/10 focus:border-luxury-gold focus:ring-luxury-gold/50 rounded-sm shadow-sm text-luxury-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-luxury-white/70">Email</label>
            <input id="email" class="block mt-1 w-full bg-luxury-black/50 border-luxury-white/10 focus:border-luxury-gold focus:ring-luxury-gold/50 rounded-sm shadow-sm text-luxury-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-luxury-white/70">Password</label>
            <input id="password" class="block mt-1 w-full bg-luxury-black/50 border-luxury-white/10 focus:border-luxury-gold focus:ring-luxury-gold/50 rounded-sm shadow-sm text-luxury-white" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-luxury-white/70">Confirm Password</label>
            <input id="password_confirmation" class="block mt-1 w-full bg-luxury-black/50 border-luxury-white/10 focus:border-luxury-gold focus:ring-luxury-gold/50 rounded-sm shadow-sm text-luxury-white" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-luxury-white/40 hover:text-luxury-gold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-gold" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button class="ms-4 btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>
