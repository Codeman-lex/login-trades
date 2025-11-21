<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Legal') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card p-12 rounded-2xl border border-luxury-white/5">
                <h1 class="text-3xl font-serif text-luxury-white mb-8">Legal & Compliance</h1>

                <div class="space-y-12 text-luxury-white/60 leading-relaxed">
                    <!-- Risk Disclosure -->
                    <section>
                        <h3 class="text-xl text-luxury-gold font-serif mb-4">Risk Disclosure</h3>
                        <p class="mb-4">
                            Trading foreign exchange, cryptocurrencies, and commodities on margin carries a high level of risk and may not be suitable for all investors. The high degree of leverage can work against you as well as for you. Before deciding to invest in foreign exchange or use our algorithmic trading software, you should carefully consider your investment objectives, level of experience, and risk appetite.
                        </p>
                        <p class="mb-4 font-bold text-luxury-white/80">
                            Past performance is not indicative of future results.
                        </p>
                    </section>

                    <!-- Privacy Policy -->
                    <section>
                        <h3 class="text-xl text-luxury-gold font-serif mb-4">Privacy Policy</h3>
                        <p class="mb-4">
                            Real AI Trading is committed to protecting your privacy. We collect only the minimum amount of data necessary to provide our services. All personal data is encrypted and stored securely. We do not sell, trade, or rent your personal identification information to others.
                        </p>
                    </section>

                    <!-- Terms of Service -->
                    <section>
                        <h3 class="text-xl text-luxury-gold font-serif mb-4">Terms of Service</h3>
                        <p class="mb-4">
                            By accessing this website and using our software, you agree to be bound by these Terms of Service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site.
                        </p>
                    </section>
                    
                    <div class="border-t border-luxury-white/10 pt-8 mt-8">
                        <p class="text-xs text-luxury-white/30">
                            Real AI Trading is a registered trademark. © {{ date('Y') }} All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
