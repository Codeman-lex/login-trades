<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Careers') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-serif mb-6">Join the <span class="text-luxury-gold">Elite</span></h1>
                <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">
                    We are always looking for exceptional talent in quantitative finance, machine learning, and blockchain engineering.
                </p>
            </div>

            <div class="space-y-6 max-w-4xl mx-auto">
                <!-- Job 1 -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5 flex flex-col md:flex-row justify-between items-center gap-6 hover:border-luxury-gold/30 transition-colors cursor-pointer group">
                    <div>
                        <h3 class="text-xl font-serif text-luxury-white mb-2 group-hover:text-luxury-gold transition-colors">Senior Quantitative Researcher</h3>
                        <div class="flex gap-4 text-xs text-luxury-white/40 uppercase tracking-wider">
                            <span>Remote</span>
                            <span>•</span>
                            <span>Full-Time</span>
                        </div>
                    </div>
                    <a href="mailto:careers@realaitrading.com?subject=Application:%20Senior%20Quant" class="px-6 py-3 rounded-lg bg-luxury-white/5 text-luxury-white hover:bg-luxury-gold hover:text-luxury-black transition-colors text-sm font-bold">
                        Apply Now
                    </a>
                </div>

                <!-- Job 2 -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5 flex flex-col md:flex-row justify-between items-center gap-6 hover:border-luxury-gold/30 transition-colors cursor-pointer group">
                    <div>
                        <h3 class="text-xl font-serif text-luxury-white mb-2 group-hover:text-luxury-gold transition-colors">Machine Learning Engineer (NLP)</h3>
                        <div class="flex gap-4 text-xs text-luxury-white/40 uppercase tracking-wider">
                            <span>London / Remote</span>
                            <span>•</span>
                            <span>Full-Time</span>
                        </div>
                    </div>
                    <a href="mailto:careers@realaitrading.com?subject=Application:%20ML%20Engineer" class="px-6 py-3 rounded-lg bg-luxury-white/5 text-luxury-white hover:bg-luxury-gold hover:text-luxury-black transition-colors text-sm font-bold">
                        Apply Now
                    </a>
                </div>

                <!-- Job 3 -->
                <div class="glass-card p-8 rounded-xl border border-luxury-white/5 flex flex-col md:flex-row justify-between items-center gap-6 hover:border-luxury-gold/30 transition-colors cursor-pointer group">
                    <div>
                        <h3 class="text-xl font-serif text-luxury-white mb-2 group-hover:text-luxury-gold transition-colors">Blockchain Developer (Solana/Rust)</h3>
                        <div class="flex gap-4 text-xs text-luxury-white/40 uppercase tracking-wider">
                            <span>Remote</span>
                            <span>•</span>
                            <span>Contract</span>
                        </div>
                    </div>
                    <a href="mailto:careers@realaitrading.com?subject=Application:%20Blockchain%20Dev" class="px-6 py-3 rounded-lg bg-luxury-white/5 text-luxury-white hover:bg-luxury-gold hover:text-luxury-black transition-colors text-sm font-bold">
                        Apply Now
                    </a>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-luxury-white/40 text-sm">
                    Don't see your role? Send your CV to <a href="mailto:careers@realaitrading.com" class="text-luxury-gold hover:underline">careers@realaitrading.com</a>
                </p>
            </div>
        </div>
    </div>
</x-public-layout>
