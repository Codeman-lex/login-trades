<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Security') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-serif mb-6">Fortress <span class="text-luxury-gold">Security</span></h1>
                <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">
                    Your capital is protected by military-grade encryption and strict risk protocols.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 mb-20">
                <!-- Cold Storage -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5">
                    <h3 class="text-2xl font-serif text-luxury-white mb-4 flex items-center gap-3">
                        <svg class="w-6 h-6 text-luxury-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        Cold Storage
                    </h3>
                    <p class="text-luxury-white/60 leading-relaxed">
                        98% of client digital assets are stored in offline, multi-signature cold wallets distributed across geographically secure vaults. Only the minimum required liquidity is kept in hot wallets for daily operations.
                    </p>
                </div>

                <!-- Encryption -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5">
                    <h3 class="text-2xl font-serif text-luxury-white mb-4 flex items-center gap-3">
                        <svg class="w-6 h-6 text-luxury-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        AES-256 Encryption
                    </h3>
                    <p class="text-luxury-white/60 leading-relaxed">
                        All sensitive user data, including API keys and personal information, is encrypted at rest using AES-256 standards. Data in transit is protected via TLS 1.3.
                    </p>
                </div>

                <!-- 2FA -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5">
                    <h3 class="text-2xl font-serif text-luxury-white mb-4 flex items-center gap-3">
                        <svg class="w-6 h-6 text-luxury-magenta" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v1m6 11h2m-6 0h-2v4h-4v-4H8m13-4V7a1 1 0 00-1-1H4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        2FA Enforcement
                    </h3>
                    <p class="text-luxury-white/60 leading-relaxed">
                        Two-Factor Authentication (2FA) is mandatory for all withdrawals and critical account changes. We support Google Authenticator and hardware keys (YubiKey).
                    </p>
                </div>

                <!-- Audit -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5">
                    <h3 class="text-2xl font-serif text-luxury-white mb-4 flex items-center gap-3">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        Regular Audits
                    </h3>
                    <p class="text-luxury-white/60 leading-relaxed">
                        Our smart contracts and internal systems undergo quarterly security audits by top-tier cybersecurity firms to ensure zero vulnerabilities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
