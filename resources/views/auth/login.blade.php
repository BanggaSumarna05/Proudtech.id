<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-8">
        @csrf

        <!-- Email Address -->
        <div class="space-y-2">
            <label for="email" class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-500">Authorized
                Email</label>
            <x-text-input id="email"
                class="block w-full bg-white/[0.02] border-white/10 text-white rounded-2xl py-4 focus:border-blue-500 focus:ring-blue-500/20 transition-all"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-red-400 font-bold uppercase tracking-tight" />
        </div>

        <!-- Password -->
        <div class="space-y-2">
            <label for="password" class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-500">Security
                Key</label>
            <x-text-input id="password"
                class="block w-full bg-white/[0.02] border-white/10 text-white rounded-2xl py-4 focus:border-blue-500 focus:ring-blue-500/20 transition-all"
                type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-red-500 font-bold uppercase tracking-tight" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox"
                    class="rounded bg-black border-white/10 text-blue-600 shadow-sm focus:ring-blue-500 focus:ring-offset-black"
                    name="remember">
                <span
                    class="ms-3 text-[10px] font-black uppercase tracking-widest text-gray-600 group-hover:text-gray-400 transition-colors">{{ __('Stay Authenticated') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-[10px] font-black uppercase tracking-widest text-gray-600 hover:text-white transition-colors"
                    href="{{ route('password.request') }}">
                    {{ __('Key Recovery') }}
                </a>
            @endif
        </div>

        <div class="pt-4">
            <button type="submit"
                class="w-full py-6 bg-white text-black rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all shadow-xl">
                {{ __('Initialize Session') }}
            </button>
        </div>
    </form>
</x-guest-layout>
