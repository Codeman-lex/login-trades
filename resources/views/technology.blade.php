<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Technology') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-20">
            <h1 class="text-4xl md:text-6xl font-serif mb-6">Our <span class="text-luxury-gold">Technology</span> Stack</h1>
            <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">Institutional-grade infrastructure powering algorithmic trading strategies.</p>
        </div>

        <!-- Deep Learning Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-luxury-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Neural Engine</span>
                    <h2 class="text-4xl md:text-5xl font-serif mb-6">Deep Learning Core</h2>
                    <p class="text-luxury-white/60 leading-relaxed mb-6">
                        Utilizing LSTM (Long Short-Term Memory) networks to process time-series data, our model identifies non-linear patterns and structural breaks. It continuously re-trains on new market data every 4 hours.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-gold"></span>
                            <span class="text-luxury-white/80">Sentiment Analysis NLP</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-gold"></span>
                            <span class="text-luxury-white/80">Order Flow Detection</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-gold"></span>
                            <span class="text-luxury-white/80">Multi-Timeframe Analysis</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-luxury-gold/20 blur-3xl rounded-full opacity-20"></div>
                    <div class="glass-card p-8 rounded-2xl relative border-luxury-white/10">
                        <div class="flex justify-between items-end h-64 gap-2">
                            <div class="w-full bg-luxury-blue/20 rounded-t-sm h-[40%] animate-pulse" style="animation-delay: 0s"></div>
                            <div class="w-full bg-luxury-blue/30 rounded-t-sm h-[70%] animate-pulse" style="animation-delay: 0.2s"></div>
                            <div class="w-full bg-luxury-gold/40 rounded-t-sm h-[50%] animate-pulse" style="animation-delay: 0.4s"></div>
                            <div class="w-full bg-luxury-blue/20 rounded-t-sm h-[80%] animate-pulse" style="animation-delay: 0.1s"></div>
                            <div class="w-full bg-luxury-magenta/30 rounded-t-sm h-[60%] animate-pulse" style="animation-delay: 0.3s"></div>
                        </div>
                        <div class="mt-6 flex justify-between text-xs text-luxury-white/40 uppercase tracking-wider">
                            <span>Model Accuracy</span>
                            <span class="text-luxury-gold">94.7%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colocated Execution Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-32 bg-luxury-charcoal/30 py-20 rounded-2xl">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass-card p-6 rounded-lg border border-luxury-white/5">
                            <div class="text-3xl font- mb-2 text-luxury-gold">LD4</div>
                            <div class="text-xs text-luxury-white/40 uppercase">London Equinix</div>
                        </div>
                        <div class="glass-card p-6 rounded-lg border border-luxury-white/5">
                            <div class="text-3xl font-serif mb-2 text-luxury-gold">NY4</div>
                            <div class="text-xs text-luxury-white/40 uppercase">New York Equinix</div>
                        </div>
                        <div class="glass-card p-6 rounded-lg border border-luxury-white/5">
                            <div class="text-3xl font-serif mb-2 text-luxury-gold">TY3</div>
                            <div class="text-xs text-luxury-white/40 uppercase">Tokyo Equinix</div>
                        </div>
                        <div class="glass-card p-6 rounded-lg border border-luxury-white/5">
                            <div class="text-3xl font-serif mb-2 text-luxury-gold">SG1</div>
                            <div class="text-xs text-luxury-white/40 uppercase">Singapore Equinix</div>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <span class="text-luxury-blue text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Latency Arbitration</span>
                    <h2 class="text-4xl md:text-5xl font-serif mb-6">Colocated Execution</h2>
                    <p class="text-luxury-white/60 leading-relaxed mb-6">
                        Direct cross-connects in Equinix data centers (LD4/NY4) ensure our execution speeds consistently beat the retail crowd, minimizing slippage and maximizing edge.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-luxury-white/60">Average Latency</span>
                            <span class="text-luxury-gold font-mono">0.4ms</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-luxury-white/60">Uptime</span>
                            <span class="text-green-400 font-mono">99.99%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Risk Engine Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-luxury-magenta text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Risk Management</span>
                    <h2 class="text-4xl md:text-5xl font-serif mb-6">The Fortress Risk Engine</h2>
                    <p class="text-luxury-white/60 leading-relaxed mb-6">
                        Proprietary risk algorithms dynamically adjust position sizing based on your specific equity curve. If the model detects a 'tilt' in market conditions, it automatically pauses trading 5 minutes before high-impact news events to protect capital.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-magenta"></span>
                            <span class="text-luxury-white/80">Max 2% risk per trade</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-magenta"></span>
                            <span class="text-luxury-white/80">Dynamic position sizing (ATR-based)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-magenta"></span>
                            <span class="text-luxury-white/80">Stops trading 5 mins before news</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="glass-card p-8 rounded-2xl border border-luxury-white/10">
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-xs mb-2">
                                    <span class="text-luxury-white/40 uppercase tracking-wider">Risk Level</span>
                                    <span class="text-green-400">LOW</span>
                                </div>
                                <div class="h-2 bg-luxury-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-green-500 to-luxury-gold w-[20%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-2">
                                    <span class="text-luxury-white/40 uppercase tracking-wider">Max Drawdown</span>
                                    <span class="text-luxury-gold">5%</span>
                                </div>
                                <div class="h-2 bg-luxury-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-luxury-gold w-[5%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-2">
                                    <span class="text-luxury-white/40 uppercase tracking-wider">Win Rate</span>
                                    <span class="text-green-400">68%</span>
                                </div>
                                <div class="h-2 bg-luxury-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500 w-[68%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>

