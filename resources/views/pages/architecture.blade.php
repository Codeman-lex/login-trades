<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Architecture') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero -->
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-serif mb-6">System <span class="text-luxury-gold">Architecture</span></h1>
                <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">
                    A decentralized, event-driven microservices architecture designed for sub-millisecond latency.
                </p>
            </div>

            <!-- Content -->
            <div class="grid md:grid-cols-2 gap-16 items-center mb-32">
                <div>
                    <span class="text-luxury-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Infrastructure</span>
                    <h2 class="text-3xl md:text-4xl font-serif mb-6 text-luxury-white">Event-Driven Core</h2>
                    <p class="text-luxury-white/60 leading-relaxed mb-6">
                        Our architecture is built on a high-throughput event bus that decouples signal generation from order execution. This ensures that heavy computation in our ML models never blocks the critical path of trade execution.
                    </p>
                    <ul class="space-y-4 text-luxury-white/60">
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-gold"></span>
                            Kubernetes Orchestration
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-gold"></span>
                            Redis Caching Layer
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-luxury-gold"></span>
                            PostgreSQL TimescaleDB
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-luxury-gold/20 blur-3xl rounded-full opacity-20"></div>
                    <div class="glass-card p-0 rounded-2xl border border-luxury-white/10 relative overflow-hidden min-h-[800px] bg-luxury-black/95 flex items-center justify-center perspective-1000">
                        <!-- Grid Background -->
                        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(198, 168, 124, 0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(198, 168, 124, 0.05) 1px, transparent 1px); background-size: 50px 50px;"></div>
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#000000_100%)]"></div>

                        <!-- Central Hologram Container -->
                        <div class="relative w-[600px] h-[600px] flex items-center justify-center animate-[spin_60s_linear_infinite]">
                            
                            <!-- Orbiting Rings -->
                            <div class="absolute inset-0 border border-luxury-gold/20 rounded-full animate-[spin_10s_linear_infinite]"></div>
                            <div class="absolute inset-12 border border-dashed border-luxury-gold/10 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div>
                            <div class="absolute inset-24 border border-luxury-gold/5 rounded-full animate-pulse"></div>

                            <!-- Central Core -->
                            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-luxury-gold/10 rounded-full blur-xl animate-pulse"></div>
                            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                                <div class="text-6xl font-serif text-luxury-white drop-shadow-[0_0_15px_rgba(198,168,124,0.5)]">AI</div>
                            </div>

                            <!-- Hardcoded Floating Nodes (No JS Required) -->
                            <!-- Node 1 -->
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-6 w-16 h-16 bg-luxury-black border border-luxury-gold/30 rounded-lg flex items-center justify-center shadow-[0_0_20px_rgba(198,168,124,0.2)] animate-[bounce_3s_infinite]">
                                <span class="text-2xl text-luxury-gold">$</span>
                            </div>
                            
                            <!-- Node 2 -->
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-6 w-16 h-16 bg-luxury-black border border-green-500/30 rounded-lg flex items-center justify-center shadow-[0_0_20px_rgba(34,197,94,0.2)] animate-[bounce_4s_infinite]">
                                <span class="text-2xl text-green-500">€</span>
                            </div>

                            <!-- Node 3 -->
                            <div class="absolute left-0 top-1/2 -translate-x-6 -translate-y-1/2 w-16 h-16 bg-luxury-black border border-luxury-magenta/30 rounded-lg flex items-center justify-center shadow-[0_0_20px_rgba(236,72,153,0.2)] animate-[bounce_3.5s_infinite]">
                                <span class="text-2xl text-luxury-magenta">£</span>
                            </div>

                            <!-- Node 4 -->
                            <div class="absolute right-0 top-1/2 translate-x-6 -translate-y-1/2 w-16 h-16 bg-luxury-black border border-blue-500/30 rounded-lg flex items-center justify-center shadow-[0_0_20px_rgba(59,130,246,0.2)] animate-[bounce_4.5s_infinite]">
                                <span class="text-2xl text-blue-500">¥</span>
                            </div>

                            <!-- Connecting Lines (SVG) -->
                            <svg class="absolute inset-0 w-full h-full pointer-events-none animate-[spin_20s_linear_infinite_reverse]">
                                <line x1="50%" y1="50%" x2="50%" y2="5%" stroke="rgba(198,168,124,0.2)" stroke-width="1" />
                                <line x1="50%" y1="50%" x2="50%" y2="95%" stroke="rgba(34,197,94,0.2)" stroke-width="1" />
                                <line x1="50%" y1="50%" x2="5%" y2="50%" stroke="rgba(236,72,153,0.2)" stroke-width="1" />
                                <line x1="50%" y1="50%" x2="95%" y2="50%" stroke="rgba(59,130,246,0.2)" stroke-width="1" />
                            </svg>
                        </div>

                        <!-- Overlay Title -->
                        <div class="absolute bottom-10 left-0 right-0 text-center z-30">
                            <h3 class="text-3xl font-serif text-luxury-white tracking-widest uppercase">Global Neural Network</h3>
                            <p class="text-luxury-gold/60 text-sm mt-2">Live Market Processing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
