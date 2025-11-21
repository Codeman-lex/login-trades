<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Real AI Trading | The Sovereign Edge</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=outfit:300,400,500,600,700|playfair-display:400,600,700&display=swap" rel="stylesheet" />
        
        <!-- GSAP Animation Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .hero-bg {
                background-image: url('/images/hero.png');
                background-size: cover;
                background-position: center;
            }
            .text-shadow-gold {
                text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
            }
        </style>
    </head>
    <body class="bg-luxury-black text-luxury-white antialiased overflow-x-hidden">
        
        <!-- Navigation -->
        <nav x-data="{ open: false }" class="fixed w-full z-50 transition-all duration-300" :class="{ 'bg-luxury-black/90 backdrop-blur-md border-b border-luxury-white/5': open || window.scrollY > 50, 'bg-transparent': !open && window.scrollY <= 50 }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-24 items-center">
                    <div class="flex items-center">
                        <a href="/" class="flex items-center gap-3 group">
                            <img src="/images/logo.png" alt="Real AI Trading" class="h-12 w-auto opacity-90 group-hover:opacity-100 transition-opacity">
                            <span class="font-serif text-xl tracking-widest text-luxury-white group-hover:text-luxury-gold transition-colors">REAL<span class="text-luxury-gold">AI</span>TRADING</span>
                        </a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('architecture') }}" class="nav-link">Architecture</a>
                        <a href="{{ route('performance') }}" class="nav-link">Performance</a>
                        <a href="{{ route('technology') }}" class="nav-link">Technology</a>
                        <a href="{{ route('login') }}" class="nav-link">Client Login</a>
                        <a href="{{ route('register') }}" class="btn-primary ml-4">
                            Request Access
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button @click="open = !open" class="text-luxury-white hover:text-luxury-gold focus:outline-none">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden bg-luxury-black/95 backdrop-blur-xl border-b border-luxury-gold/10">
                <div class="pt-2 pb-4 space-y-1 px-4">
                    <a href="{{ route('architecture') }}" class="block py-3 text-luxury-white hover:text-luxury-gold border-b border-white/5">Architecture</a>
                    <a href="{{ route('performance') }}" class="block py-3 text-luxury-white hover:text-luxury-gold border-b border-white/5">Performance</a>
                    <a href="{{ route('technology') }}" class="block py-3 text-luxury-white hover:text-luxury-gold border-b border-white/5">Technology</a>
                    <a href="{{ route('login') }}" class="block py-3 text-luxury-white hover:text-luxury-gold border-b border-white/5">Client Login</a>
                    <a href="{{ route('register') }}" class="block py-4 text-luxury-gold font-bold">Request Access</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
            <!-- Neural Void Canvas -->
            <canvas id="neural-canvas" class="absolute inset-0 z-0"></canvas>
            
            <!-- Gradient Overlay for Text Readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-luxury-black/30 via-transparent to-luxury-black z-0 pointer-events-none"></div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 w-full text-center">
                <div class="space-y-8 relative z-20">
                    <!-- Status Indicator -->
                    <div class="hero-element opacity-0 translate-y-4 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-luxury-gold/5 border border-luxury-gold/20 backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse shadow-[0_0_10px_rgba(34,197,94,0.5)]"></span>
                        <span class="text-luxury-gold text-xs tracking-[0.2em] uppercase font-bold">Systems Operational</span>
                    </div>
                    
                    <!-- Main Headline -->
                    <h1 class="text-6xl md:text-8xl lg:text-9xl font-serif font-medium tracking-tight leading-none">
                        <div class="overflow-hidden">
                            <span class="hero-text-line block translate-y-full">The <span class="text-gradient-gold italic glow-text-gold">Sovereign</span></span>
                        </div>
                        <div class="overflow-hidden">
                            <span class="hero-text-line block translate-y-full">Edge.</span>
                        </div>
                    </h1>
                    
                    <!-- Subheadline -->
                    <div class="overflow-hidden">
                        <p class="hero-element opacity-0 translate-y-4 mt-8 max-w-2xl mx-auto text-xl md:text-2xl text-luxury-white/80 font-light leading-relaxed">
                            We deploy market-grade AI that trades every market with precision. <span class="text-luxury-white font-normal">Own the AI or grow your capital through us.</span> Zero emotion. Pure execution.
                        </p>
                    </div>
                    
                    <!-- Buttons -->
                    <div class="hero-element opacity-0 translate-y-4 mt-12 flex flex-col md:flex-row gap-6 justify-center items-center">
                        <a href="{{ route('register') }}" class="btn-primary min-w-[220px] text-sm py-4 shadow-lg shadow-luxury-blue/20 hover:shadow-luxury-blue/40">
                            Request Access
                        </a>
                        <a href="{{ route('login') }}" class="group flex items-center gap-2 px-8 py-4 rounded-full border border-luxury-white/10 hover:bg-luxury-white/5 transition-all duration-300">
                            <span class="text-luxury-white text-sm tracking-widest uppercase">Live Terminal</span>
                            <svg class="w-4 h-4 text-luxury-gold group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intelligence Section -->
        <div class="py-32 bg-luxury-black relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <span class="text-luxury-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Holistic Wealth AI</span>
                        <h2 class="text-5xl md:text-6xl font-serif leading-tight mb-8">
                            Total Wealth <br> <span class="italic text-luxury-white/50">Sovereignty.</span>
                        </h2>
                        <div class="space-y-6 text-lg text-luxury-white/60 font-light leading-relaxed">
                            <p>
                                RealAI isn't just a trading bot; it's a <strong class="text-luxury-white">multi-asset wealth architect</strong>. From high-frequency crypto arbitrage to optimizing real estate yields and tax efficiency.
                            </p>
                            <p>
                                It constantly scans global markets—Forex, Commodities, Indices, and Digital Assets—to identify and execute high-value opportunities that manual traders simply cannot see.
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute -inset-4 bg-luxury-blue/20 blur-3xl rounded-full opacity-20"></div>
                        <!-- Omni Terminal Container -->
                        <div class="glass-panel rounded-2xl relative border border-luxury-white/10 overflow-hidden h-[400px] bg-black/40 backdrop-blur-xl">
                            <!-- Terminal Header -->
                            <div class="flex items-center justify-between px-4 py-3 border-b border-luxury-white/5 bg-white/5">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                                </div>
                                <div class="text-xs text-luxury-white/40 font-mono uppercase tracking-widest">
                                    Live Execution Log
                                </div>
                                <div class="w-12"></div> <!-- Spacer -->
                            </div>
                            
                            <!-- Terminal Body -->
                            <div id="omni-terminal">
                                <!-- JS will inject logs here -->
                            </div>
                            
                            <!-- Terminal Footer -->
                            <div class="absolute bottom-0 left-0 w-full h-12 bg-gradient-to-t from-luxury-black/80 to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Unfair Advantage -->
        <div class="py-32 bg-luxury-charcoal relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-luxury-white/10 to-transparent"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-20">
                    <h2 class="text-5xl md:text-7xl font-serif mb-6">The Unfair <br> <span class="italic text-luxury-gold">Advantage.</span></h2>
                    <p class="text-xl text-luxury-white/60 max-w-2xl">Manual trading is biologically flawed. Fear, greed, and fatigue destroy edge. Our systems operate with cold, mathematical precision 24/5.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Card 1 -->
                    <div class="obsidian-card p-10 rounded-xl group relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-luxury-gold/5 rounded-full blur-3xl -mr-16 -mt-16 transition-opacity opacity-0 group-hover:opacity-100"></div>
                        
                        <div class="glass-pill w-14 h-14 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 relative z-10">
                            <svg class="w-6 h-6 text-luxury-gold drop-shadow-[0_0_8px_rgba(212,175,55,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-serif mb-4 group-hover:text-gradient-gold transition-all">Zero Emotional Variance</h3>
                        <p class="text-luxury-white/60 leading-relaxed group-hover:text-luxury-white/80 transition-colors">The AI never 'revenge trades' or hesitates. It executes the plan perfectly, every single time, eliminating the psychological pitfalls of manual execution.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="obsidian-card p-10 rounded-xl group relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-luxury-blue/5 rounded-full blur-3xl -mr-16 -mt-16 transition-opacity opacity-0 group-hover:opacity-100"></div>

                        <div class="glass-pill w-14 h-14 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 relative z-10">
                            <svg class="w-6 h-6 text-luxury-blue drop-shadow-[0_0_8px_rgba(59,130,246,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-serif mb-4 group-hover:text-luxury-blue transition-all">24/7 Market Vigilance</h3>
                        <p class="text-luxury-white/60 leading-relaxed group-hover:text-luxury-white/80 transition-colors">We capture moves during the London and Asian sessions while you sleep. Our algorithms monitor 28 currency pairs simultaneously, maximizing opportunities.</p>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="obsidian-card p-10 rounded-xl group relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-luxury-magenta/5 rounded-full blur-3xl -mr-16 -mt-16 transition-opacity opacity-0 group-hover:opacity-100"></div>

                        <div class="glass-pill w-14 h-14 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 relative z-10">
                            <svg class="w-6 h-6 text-luxury-magenta drop-shadow-[0_0_8px_rgba(232,121,249,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="text-2xl font-serif mb-4 group-hover:text-luxury-magenta transition-all">Prop Firm Optimized</h3>
                        <p class="text-luxury-white/60 leading-relaxed group-hover:text-luxury-white/80 transition-colors">Specifically calibrated for the drawdown rules of major prop firms (FTMO, FundedNext). We manage risk to keep your account safe while hitting profit targets.</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="obsidian-card p-10 rounded-xl group relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-green-500/5 rounded-full blur-3xl -mr-16 -mt-16 transition-opacity opacity-0 group-hover:opacity-100"></div>

                        <div class="glass-pill w-14 h-14 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500 relative z-10">
                            <svg class="w-6 h-6 text-green-400 drop-shadow-[0_0_8px_rgba(74,222,128,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-serif mb-4 group-hover:text-green-400 transition-all">Institutional Risk Models</h3>
                        <p class="text-luxury-white/60 leading-relaxed group-hover:text-luxury-white/80 transition-colors">Dynamic position sizing based on volatility (ATR) and account equity. We never risk more than 1-2% per trade setup.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Verified Circle (Marquee) -->
        <div class="py-32 bg-luxury-black overflow-hidden">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-6xl font-serif">The <span class="italic text-luxury-magenta">Verified</span> Circle</h2>
            </div>

            <!-- Marquee Row 1 (Left) -->
            <div class="marquee-container mb-8">
                <div class="marquee-content animate-marquee-left flex gap-8">
                    <!-- 1. The Investor -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-gold to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/1.jpg" alt="Michael R." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Michael R.</div>
                                    <div class="text-[10px] text-luxury-gold uppercase tracking-wider">Private Investor</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"I moved 20% of my portfolio here. The monthly compounding is consistent, and I don't have to stare at charts all day. It's true passive income."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-gold/10 text-luxury-gold text-[10px] uppercase tracking-widest border border-luxury-gold/20 font-bold">
                                $50k Deposit
                            </div>
                        </div>
                    </div>

                    <!-- 2. The Tech User -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-blue to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/2.jpg" alt="David C." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">David C.</div>
                                    <div class="text-[10px] text-luxury-blue uppercase tracking-wider">Algo Trader</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"Bought the lifetime license and installed it on my own VPS. It handled the NFP news event perfectly. Total control."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-blue/10 text-luxury-blue text-[10px] uppercase tracking-widest border border-luxury-blue/20 font-bold">
                                License Owner
                            </div>
                        </div>
                    </div>

                    <!-- 3. The Prop Trader -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-magenta to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/3.jpg" alt="Sarah K." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Sarah K.</div>
                                    <div class="text-[10px] text-luxury-magenta uppercase tracking-wider">Funded Trader</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"Failed 3 challenges before this. The risk management is strict—it never violates the daily drawdown limits. Finally funded."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-magenta/10 text-luxury-magenta text-[10px] uppercase tracking-widest border border-luxury-magenta/20 font-bold">
                                $200k Funded
                            </div>
                        </div>
                    </div>

                    <!-- 7. The Skeptic Turned Believer -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-gold to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/4.jpg" alt="Robert L." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Robert L.</div>
                                    <div class="text-[10px] text-luxury-gold uppercase tracking-wider">Retired Engineer</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"I analyzed the trade logs for weeks before depositing. The risk-reward ratio is mathematically sound. It's not gambling; it's probability."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-gold/10 text-luxury-gold text-[10px] uppercase tracking-widest border border-luxury-gold/20 font-bold">
                                $25k Deposit
                            </div>
                        </div>
                    </div>

                    <!-- 8. The Scaling Trader -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-magenta to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/5.jpg" alt="Alex P." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Alex P.</div>
                                    <div class="text-[10px] text-luxury-magenta uppercase tracking-wider">Funded Trader</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"I'm now funded with three different firms using this AI. It manages the lot sizes automatically across all accounts. Game changer."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-magenta/10 text-luxury-magenta text-[10px] uppercase tracking-widest border border-luxury-magenta/20 font-bold">
                                $400k Allocation
                            </div>
                        </div>
                    </div>

                    <!-- 9. The Institutional Client -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-blue to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/6.jpg" alt="Sophia W." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Sophia W.</div>
                                    <div class="text-[10px] text-luxury-blue uppercase tracking-wider">Hedge Fund Analyst</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"We use the 'Sovereign Edge' as a non-correlated asset in our alpha fund. The drawdown control is superior to our internal models."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-blue/10 text-luxury-blue text-[10px] uppercase tracking-widest border border-luxury-blue/20 font-bold">
                                Enterprise License
                            </div>
                        </div>
                    </div>
                    
                    <!-- Duplicate for seamless loop -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-gold to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/1.jpg" alt="Michael R." class="w-full h-full object-cover object-center">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Michael R.</div>
                                    <div class="text-[10px] text-luxury-gold uppercase tracking-wider">Private Investor</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"I moved 20% of my portfolio here. The monthly compounding is consistent, and I don't have to stare at charts all day. It's true passive income."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-gold/10 text-luxury-gold text-[10px] uppercase tracking-widest border border-luxury-gold/20 font-bold">
                                $50k Deposit
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marquee Row 2 (Right) -->
            <div class="marquee-container">
                <div class="marquee-content animate-marquee-right flex gap-8">
                    <!-- 4. The Retiree -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-green-500 to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/7.jpg" alt="Elena M." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Elena M.</div>
                                    <div class="text-[10px] text-green-400 uppercase tracking-wider">Passive Income</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"Finally a system that actually pays out. My withdrawal hit my wallet in 4 hours. This is better than my pension plan."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-green-500/10 text-green-400 text-[10px] uppercase tracking-widest border border-green-500/20 font-bold">
                                $12k Withdrawal
                            </div>
                        </div>
                    </div>

                    <!-- 5. The Fund Manager -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-white to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/8.jpg" alt="Marcus T." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Marcus T.</div>
                                    <div class="text-[10px] text-luxury-white uppercase tracking-wider">Fund Manager</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"We integrated the API into our firm's dashboard. The execution speed on Gold (XAUUSD) pairs is institutional grade."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-white/10 text-luxury-white text-[10px] uppercase tracking-widest border border-luxury-white/20 font-bold">
                                Enterprise Client
                            </div>
                        </div>
                    </div>

                    <!-- 6. The Payout Winner -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-gold to-luxury-magenta"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/9.jpg" alt="James D." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">James D.</div>
                                    <div class="text-[10px] text-luxury-gold uppercase tracking-wider">Prop Trader</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"Just got my second payout from FundedNext. The AI catches moves during the Asian session while I'm asleep. It prints money."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-gold/10 text-luxury-gold text-[10px] uppercase tracking-widest border border-luxury-gold/20 font-bold">
                                $15k Payout
                            </div>
                        </div>
                    </div>

                    <!-- 10. The Crypto Native -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-blue to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/10.jpg" alt="Daniel K." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Daniel K.</div>
                                    <div class="text-[10px] text-luxury-blue uppercase tracking-wider">DeFi Investor</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"Better yield than staking ETH. The AI navigates the volatility of crypto markets without the emotional panic selling I used to do."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-blue/10 text-luxury-blue text-[10px] uppercase tracking-widest border border-luxury-blue/20 font-bold">
                                2.5 BTC Deposit
                            </div>
                        </div>
                    </div>

                    <!-- 11. The Busy Professional -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-green-500 to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/11.jpg" alt="Dr. Emily S." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Dr. Emily S.</div>
                                    <div class="text-[10px] text-green-400 uppercase tracking-wider">Surgeon</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"I don't have time to trade. I check the dashboard once a week. Seeing the 'ROI Growth' notifications on my phone is the highlight of my day."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-green-500/10 text-green-400 text-[10px] uppercase tracking-widest border border-green-500/20 font-bold">
                                $8k Withdrawal
                            </div>
                        </div>
                    </div>

                    <!-- 12. The Recovery Story -->
                    <div class="glass-card p-6 rounded-xl w-[320px] h-[320px] flex-shrink-0 border border-luxury-white/5 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="relative w-12 h-12 flex-shrink-0">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-luxury-magenta to-luxury-black"></div>
                                    <div class="absolute inset-[1px] rounded-full bg-luxury-black overflow-hidden">
                                        <img src="/images/testimonials/12.jpg" alt="Jason B." class="w-full h-full object-cover" style="object-position: 50% 30%; transform: scale(1.1);">
                                    </div>
                                </div>
                                <div>
                                    <div class="text-luxury-white font-serif leading-tight">Jason B.</div>
                                    <div class="text-[10px] text-luxury-magenta uppercase tracking-wider">Prop Trader</div>
                                </div>
                                <div class="ml-auto flex gap-0.5 text-luxury-gold text-[10px]">★★★★★</div>
                            </div>
                            <p class="text-luxury-white/60 text-sm italic leading-relaxed">"I blew 5 accounts trying to trade gold manually. This AI passed the challenge in 18 days. It just waits for the perfect setup."</p>
                        </div>
                        <div>
                            <div class="inline-block px-3 py-1.5 rounded bg-luxury-magenta/10 text-luxury-magenta text-[10px] uppercase tracking-widest border border-luxury-magenta/20 font-bold">
                                $50k Funded
                            </div>
                        </div>
                    </div>                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-luxury-charcoal border-t border-luxury-white/5 pt-20 pb-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                    <div class="col-span-1 md:col-span-1">
                        <a href="/" class="flex items-center gap-2 mb-6">
                            <img src="/images/logo.png" alt="Logo" class="h-8 w-auto opacity-80">
                            <span class="font-serif text-lg tracking-widest text-luxury-white">REAL<span class="text-luxury-gold">AI</span></span>
                        </a>
                        <p class="text-luxury-white/40 text-sm leading-relaxed">
                            Advanced algorithmic trading solutions for the modern institutional investor.
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="text-luxury-gold text-xs font-bold uppercase tracking-widest mb-6">Platform</h4>
                        <ul class="space-y-4 text-sm text-luxury-white/60">
                            <li><a href="{{ route('markets') }}" class="hover:text-luxury-gold transition-colors">Markets</a></li>
                            <li><a href="{{ route('technology') }}" class="hover:text-luxury-gold transition-colors">Technology</a></li>
                            <li><a href="{{ route('security') }}" class="hover:text-luxury-gold transition-colors">Security</a></li>
                            <li><a href="{{ route('api') }}" class="hover:text-luxury-gold transition-colors">API</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-luxury-gold text-xs font-bold uppercase tracking-widest mb-6">Company</h4>
                        <ul class="space-y-4 text-sm text-luxury-white/60">
                            <li><a href="{{ route('about') }}" class="hover:text-luxury-gold transition-colors">About Us</a></li>
                            <li><a href="{{ route('careers') }}" class="hover:text-luxury-gold transition-colors">Careers</a></li>
                            <li><a href="{{ route('legal') }}" class="hover:text-luxury-gold transition-colors">Legal</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-luxury-gold transition-colors">Contact</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-luxury-gold text-xs font-bold uppercase tracking-widest mb-6">Legal</h4>
                        <p class="text-luxury-white/30 text-xs leading-relaxed">
                            Trading involves risk. Past performance is not indicative of future results. Real AI Trading is a registered trademark.
                        </p>
                    </div>
                </div>
                
                <div class="border-t border-luxury-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-luxury-white/30 text-xs">© {{ date('Y') }} Real AI Trading. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="text-luxury-white/30 hover:text-luxury-gold transition-colors"><span class="sr-only">Twitter</span><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg></a>
                        <a href="#" class="text-luxury-white/30 hover:text-luxury-gold transition-colors"><span class="sr-only">LinkedIn</span><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- GSAP Animations -->
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                gsap.registerPlugin(ScrollTrigger);

                // Hero Animation Timeline
                const tl = gsap.timeline({ defaults: { ease: "power4.out" } });

                // 1. Text Reveal (Staggered Lines)
                tl.to(".hero-text-line", {
                    y: 0,
                    duration: 1.5,
                    stagger: 0.2,
                    delay: 0.5
                })
                // 2. Elements Fade In (Status, Subhead, Buttons)
                .to(".hero-element", {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    stagger: 0.1
                }, "-=1");

                // Scroll Animations for Sections
                gsap.utils.toArray('.glass-card').forEach((card, i) => {
                    gsap.from(card, {
                        scrollTrigger: {
                            trigger: card,
                            start: "top 85%",
                        },
                        y: 50,
                        opacity: 0,
                        duration: 0.8,
                        delay: i * 0.1
                    });
                });
            });
        </script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6920d8a33430481966e58d83/1jak4sfvk';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>
