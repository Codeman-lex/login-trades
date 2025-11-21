<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Real AI Trading') }} | The Sovereign Edge</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=outfit:300,400,500,600,700|playfair-display:400,600,700&display=swap" rel="stylesheet" />
        
        <!-- GSAP Animation Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .text-shadow-gold {
                text-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
            }
        </style>
    </head>
    <body class="bg-luxury-black text-luxury-white antialiased overflow-x-hidden">
        
        <!-- Navigation -->
        <nav x-data="{ open: false }" class="fixed w-full z-50 transition-all duration-300 bg-luxury-black/90 backdrop-blur-md border-b border-luxury-white/5">
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

        <!-- Page Content -->
        <main class="pt-64">
            {{ $slot }}
        </main>

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
                        delay: 0.1
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
