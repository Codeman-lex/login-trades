<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero -->
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-serif mb-6">The <span class="text-luxury-gold">Sovereign</span> Standard</h1>
                <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">
                    We are building the future of autonomous wealth generation.
                </p>
            </div>

            <!-- Mission -->
            <div class="grid md:grid-cols-2 gap-16 items-center mb-32">
                <div>
                    <span class="text-luxury-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Our Mission</span>
                    <h2 class="text-3xl md:text-4xl font-serif mb-6 text-luxury-white">Democratizing Institutional Alpha</h2>
                    <p class="text-luxury-white/60 leading-relaxed mb-6">
                        For decades, high-frequency trading algorithms and deep learning models were the exclusive domain of Wall Street hedge funds. Real AI Trading bridges this gap, providing retail investors and prop traders with the same technological edge used by the world's largest financial institutions.
                    </p>
                    <p class="text-luxury-white/60 leading-relaxed">
                        We believe in "Sovereign Wealth"—the ability for individuals to generate consistent, passive income independent of traditional employment or market manipulation.
                    </p>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-luxury-gold/20 blur-3xl rounded-full opacity-20"></div>
                    <div class="glass-card p-8 rounded-2xl border border-luxury-white/10 relative overflow-hidden">
                        <div class="grid grid-cols-2 gap-8 text-center">
                            <div>
                                <div class="text-4xl font-serif text-luxury-white mb-2">$50M+</div>
                                <div class="text-xs text-luxury-gold uppercase tracking-wider">Volume Traded</div>
                            </div>
                            <div>
                                <div class="text-4xl font-serif text-luxury-white mb-2">12k+</div>
                                <div class="text-xs text-luxury-gold uppercase tracking-wider">Active Users</div>
                            </div>
                            <div>
                                <div class="text-4xl font-serif text-luxury-white mb-2">99.9%</div>
                                <div class="text-xs text-luxury-gold uppercase tracking-wider">Uptime</div>
                            </div>
                            <div>
                                <div class="text-4xl font-serif text-luxury-white mb-2">24/7</div>
                                <div class="text-xs text-luxury-gold uppercase tracking-wider">Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
