<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Case Studies') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black">
        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-20">
            <h1 class="text-4xl md:text-6xl font-serif mb-6">Proven <span class="text-luxury-gold">Results</span></h1>
            <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">Real-world performance from our institutional-grade trading algorithms.</p>
        </div>

        <!-- Case Studies Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8">
                
                <!-- Case Study 1 -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/10 hover:border-luxury-gold/30 transition-all duration-500 group">
                    <div class="mb-6">
                        <div class="inline-block px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-xs uppercase tracking-widest border border-green-500/20 mb-4">
                            Active Fund
                        </div>
                        <h3 class="text-3xl font-serif mb-2 group-hover:text-luxury-gold transition-colors">FTMO $200k Challenge</h3>
                        <p class="text-luxury-white/50 text-sm">EUR/USD, GBP/USD Scalping Strategy</p>
                    </div>

                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Total ROI</div>
                            <div class="text-3xl font-serif text-luxury-gold">+47.3%</div>
                        </div>
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Sharpe Ratio</div>
                            <div class="text-3xl font-serif text-green-400">2.41</div>
                        </div>
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Win Rate</div>
                            <div class="text-2xl font-serif text-luxury-white">72%</div>
                        </div>
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Max Drawdown</div>
                            <div class="text-2xl font-serif text-luxury-white">-4.2%</div>
                        </div>
                    </div>

                    <div class="border-t border-luxury-white/5 pt-6">
                        <p class="text-luxury-white/60 text-sm leading-relaxed">
                            Passed the FTMO $200k challenge in 18 days using our momentum-based neural engine. The algorithm identified 43 high-probability setups, achieving a 72% win rate while maintaining strict drawdown limits.
                        </p>
                    </div>

                    <div class="mt-6 flex items-center gap-2 text-xs text-luxury-white/40">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>Live Since: Oct 2024</span>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/10 hover:border-luxury-blue/30 transition-all duration-500 group">
                    <div class="mb-6">
                        <div class="inline-block px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs uppercase tracking-widest border border-blue-500/20 mb-4">
                            Completed
                        </div>
                        <h3 class="text-3xl font-serif mb-2 group-hover:text-luxury-blue transition-colors">Gold (XAU/USD) Swing</h3>
                        <p class="text-luxury-white/50 text-sm">Multi-Timeframe Analysis</p>
                    </div>

                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Total ROI</div>
                            <div class="text-3xl font-serif text-luxury-gold">+89.6%</div>
                        </div>
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Sharpe Ratio</div>
                            <div class="text-3xl font-serif text-green-400">3.12</div>
                        </div>
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Win Rate</div>
                            <div class="text-2xl font-serif text-luxury-white">65%</div>
                        </div>
                        <div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-2">Max Drawdown</div>
                            <div class="text-2xl font-serif text-luxury-white">-6.8%</div>
                        </div>
                    </div>

                    <div class="border-t border-luxury-white/5 pt-6">
                        <p class="text-luxury-white/60 text-sm leading-relaxed">
                            Captured the volatile Gold rally in Q3 2024. The algorithm correctly identified institutional order flow reversals, entering 27 swing positions over 4 months with an average hold time of 3.2 days.
                        </p>
                    </div>

                    <div class="mt-6 flex items-center gap-2 text-xs text-luxury-white/40">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>Duration: Jul - Oct 2024</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Performance Disclaimer -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
            <div class="glass-card p-6 rounded-xl border border-luxury-white/10">
                <p class="text-xs text-luxury-white/40 leading-relaxed">
                    <strong class="text-luxury-white/60">Disclaimer:</strong> Past performance is not indicative of future results. Trading involves substantial risk of loss. The case studies presented reflect real trading outcomes but individual results may vary based on market conditions, risk tolerance, and capital allocation.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
