<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen flex items-center" style="padding-top: 200px;">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center w-full">
            <div class="glass-card p-12 rounded-2xl border border-luxury-white/5 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-64 h-64 bg-luxury-gold/5 rounded-full blur-3xl -ml-20 -mt-20"></div>
                
                <h1 class="text-4xl font-serif text-luxury-white mb-6">Get in <span class="text-luxury-gold">Touch</span></h1>
                <p class="text-luxury-white/60 mb-12 text-lg">
                    Our dedicated support team is available 24/7 to assist you with any inquiries.
                </p>

                <div class="space-y-8">
                    <div class="p-6 rounded-xl bg-luxury-white/5 border border-luxury-white/5">
                        <div class="text-luxury-gold text-xs font-bold uppercase tracking-widest mb-2">General Support</div>
                        <a href="mailto:support@realaitrading.com" class="text-2xl font-serif text-luxury-white hover:text-luxury-gold transition-colors">
                            support@realaitrading.com
                        </a>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="p-6 rounded-xl bg-luxury-white/5 border border-luxury-white/5">
                            <div class="text-luxury-gold text-xs font-bold uppercase tracking-widest mb-2">Partnerships</div>
                            <a href="mailto:partners@realaitrading.com" class="text-lg text-luxury-white hover:text-luxury-gold transition-colors">
                                partners@realaitrading.com
                            </a>
                        </div>
                        <div class="p-6 rounded-xl bg-luxury-white/5 border border-luxury-white/5">
                            <div class="text-luxury-gold text-xs font-bold uppercase tracking-widest mb-2">Press Inquiries</div>
                            <a href="mailto:press@realaitrading.com" class="text-lg text-luxury-white hover:text-luxury-gold transition-colors">
                                press@realaitrading.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
