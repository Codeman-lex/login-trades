<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Markets') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero -->
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-serif mb-6">Global <span class="text-luxury-gold">Markets</span> Access</h1>
                <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">
                    Trade the world's most liquid assets with institutional-grade execution.
                </p>
            </div>

            <!-- Asset Classes Grid -->
            <div class="grid md:grid-cols-3 gap-8 mb-20">
                <!-- Crypto -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5 hover:border-luxury-gold/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full bg-luxury-blue/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-luxury-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-serif text-luxury-white mb-4">Cryptocurrency</h3>
                    <p class="text-luxury-white/60 text-sm leading-relaxed mb-6">
                        24/7 exposure to major digital assets including BTC, ETH, and SOL. Our AI adapts to high-volatility environments instantly.
                    </p>
                    <ul class="space-y-2 text-sm text-luxury-white/40">
                        <li>• Bitcoin (BTC/USD)</li>
                        <li>• Ethereum (ETH/USD)</li>
                        <li>• Solana (SOL/USD)</li>
                    </ul>
                </div>

                <!-- Forex -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5 hover:border-luxury-gold/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full bg-luxury-gold/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-luxury-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-serif text-luxury-white mb-4">Forex</h3>
                    <p class="text-luxury-white/60 text-sm leading-relaxed mb-6">
                        Deep liquidity on all major currency pairs. Our algorithms exploit inefficiencies in cross-border exchange rates.
                    </p>
                    <ul class="space-y-2 text-sm text-luxury-white/40">
                        <li>• EUR/USD</li>
                        <li>• GBP/USD</li>
                        <li>• USD/JPY</li>
                    </ul>
                </div>

                <!-- Commodities -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5 hover:border-luxury-gold/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full bg-luxury-magenta/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-luxury-magenta" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-serif text-luxury-white mb-4">Commodities</h3>
                    <p class="text-luxury-white/60 text-sm leading-relaxed mb-6">
                        Hedge against inflation with automated trading strategies on precious metals and energy markets.
                    </p>
                    <ul class="space-y-2 text-sm text-luxury-white/40">
                        <li>• Gold (XAU/USD)</li>
                        <li>• Silver (XAG/USD)</li>
                        <li>• Oil (WTI/Brent)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
