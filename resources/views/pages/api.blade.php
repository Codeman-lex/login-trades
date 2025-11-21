<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('API Access') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen flex items-center" style="padding-top: 200px;">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="glass-card p-12 rounded-2xl border border-luxury-white/5 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-luxury-blue/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                
                <span class="text-luxury-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Developers & Institutions</span>
                <h1 class="text-4xl md:text-5xl font-serif mb-6 text-luxury-white">Integrate the <span class="text-luxury-blue">Sovereign Edge</span></h1>
                
                <p class="text-xl text-luxury-white/60 mb-10 leading-relaxed">
                    Connect your proprietary trading systems directly to our execution engine via our low-latency WebSocket API.
                </p>

                <div class="grid md:grid-cols-3 gap-6 mb-12 text-left">
                    <div class="p-4 rounded-lg bg-luxury-white/5 border border-luxury-white/5">
                        <div class="text-luxury-gold font-mono text-sm mb-2">WebSocket</div>
                        <div class="text-luxury-white/60 text-xs">Real-time market data & order updates < 50ms</div>
                    </div>
                    <div class="p-4 rounded-lg bg-luxury-white/5 border border-luxury-white/5">
                        <div class="text-luxury-gold font-mono text-sm mb-2">REST API</div>
                        <div class="text-luxury-white/60 text-xs">Account management & historical data access</div>
                    </div>
                    <div class="p-4 rounded-lg bg-luxury-white/5 border border-luxury-white/5">
                        <div class="text-luxury-gold font-mono text-sm mb-2">FIX Protocol</div>
                        <div class="text-luxury-white/60 text-xs">Institutional standard for high-frequency trading</div>
                    </div>
                </div>

                <div class="inline-block">
                    <a href="mailto:support@realaitrading.com?subject=API%20Access%20Request" class="bg-luxury-gold text-luxury-black px-8 py-4 rounded-lg font-bold hover:bg-white transition-colors flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        Request API Keys
                    </a>
                    <p class="mt-4 text-luxury-white/30 text-xs">
                        Contact us at <span class="text-luxury-white">support@realaitrading.com</span> for documentation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
