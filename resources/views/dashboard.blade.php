<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <h2 class="font-serif text-2xl text-luxury-white">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center gap-3 w-full md:w-auto">
                <button onclick="document.getElementById('deposit-modal').showModal()" class="flex-1 md:flex-none justify-center px-4 py-2 bg-luxury-gold text-luxury-black text-xs font-bold rounded-lg hover:bg-white transition-colors shadow-lg shadow-luxury-gold/10 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"></path></svg>
                    Deposit
                </button>
                <button onclick="document.getElementById('withdraw-modal').showModal()" class="flex-1 md:flex-none justify-center px-4 py-2 bg-luxury-white/5 text-luxury-white text-xs font-bold rounded-lg hover:bg-luxury-white/10 border border-luxury-white/10 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Withdraw
                </button>
                
                <div class="hidden md:block h-8 w-px bg-luxury-white/10 mx-1"></div>
                
                <div class="hidden md:flex items-center gap-4">
                    <span class="text-xs text-luxury-white/40 uppercase tracking-widest">System Status</span>
                    <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-green-500/10 border border-green-500/20">
                        <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                        <span class="text-xs font-bold text-green-400">OPERATIONAL</span>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-xl mx-auto max-w-7xl" x-data="{ show: true }" x-show="show" x-transition>
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div class="flex-1">
                    <p class="text-sm text-green-200">{{ session('success') }}</p>
                </div>
                <button @click="show = false" class="text-green-400 hover:text-green-200 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
    @endif

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Top Row: Stats Cards -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Total Equity -->
                <div class="obsidian-card p-6 rounded-xl group hover:border-luxury-gold/30">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-luxury-white/50 text-xs uppercase tracking-widest">Total Equity</span>
                        <div class="w-8 h-8 rounded-lg bg-luxury-gold/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-luxury-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                    </div>
                    <div class="text-4xl font-serif text-luxury-white mb-2">
                        ${{ number_format(Auth::user()->accountBalance->current_balance ?? 0, 2) }}
                    </div>
                    <div class="flex items-center gap-2 text-xs">
                        @if(Auth::user()->accountBalance && Auth::user()->accountBalance->current_balance > 0)
                            @php
                                $profit = Auth::user()->accountBalance->current_balance - Auth::user()->accountBalance->principal_amount;
                                $profitPercent = Auth::user()->accountBalance->principal_amount > 0 
                                    ? ($profit / Auth::user()->accountBalance->principal_amount) * 100 
                                    : 0;
                            @endphp
                            <span class="{{ $profit >= 0 ? 'text-green-400' : 'text-red-400' }} font-bold">
                                {{ $profit >= 0 ? '+' : '' }}{{ number_format($profitPercent, 2) }}%
                            </span>
                            <span class="text-luxury-white/40">vs last month</span>
                        @else
                            <span class="text-luxury-white/40">No active positions</span>
                        @endif
                    </div>
                </div>

                <!-- Principal Capital -->
                <div class="obsidian-card p-6 rounded-xl group hover:border-luxury-blue/30">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-luxury-white/50 text-xs uppercase tracking-widest">Principal</span>
                        <div class="w-8 h-8 rounded-lg bg-luxury-blue/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-luxury-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                    <div class="text-4xl font-serif text-luxury-white mb-2">
                        ${{ number_format(Auth::user()->accountBalance->principal_amount ?? 0, 2) }}
                    </div>
                    <div class="text-xs text-luxury-white/40">Deployed Capital</div>
                </div>

                <!-- Net Profit -->
                <div class="obsidian-card p-6 rounded-xl group hover:border-luxury-magenta/30">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-luxury-white/50 text-xs uppercase tracking-widest">Net Profit</span>
                        <div class="w-8 h-8 rounded-lg bg-luxury-magenta/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-luxury-magenta" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                    </div>
                    @php
                        $profit = (Auth::user()->accountBalance->current_balance ?? 0) - (Auth::user()->accountBalance->principal_amount ?? 0);
                    @endphp
                    <div class="text-4xl font-serif {{ $profit >= 0 ? 'text-green-400' : 'text-red-400' }} mb-2">
                        {{ $profit >= 0 ? '+' : '' }}${{ number_format($profit, 2) }}
                    </div>
                    <div class="text-xs text-luxury-white/40">Total Algorithmic Return</div>
                </div>
            </div>

            <!-- Middle Row: RiskAlp & Activity -->
            <div class="grid lg:grid-cols-3 gap-6">
                <!-- RiskAlp Insight (2/3) -->
                <div class="lg:col-span-2 obsidian-card p-8 rounded-xl relative overflow-hidden border-luxury-blue/20">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-luxury-blue/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                    
                    <div class="flex items-start justify-between mb-8 relative z-10">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-luxury-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <h3 class="text-xl font-serif text-luxury-white">RiskAlp Analysis</h3>
                            </div>
                            <p class="text-sm text-luxury-white/60 max-w-md">Your portfolio exposure is currently <span class="text-green-400 font-bold">OPTIMAL</span>. The AI has hedged 40% of positions against incoming USD volatility.</p>
                        </div>
                        <div class="text-right">
                            <div class="text-3xl font-bold text-luxury-blue">98.4%</div>
                            <div class="text-xs text-luxury-white/40 uppercase tracking-widest">Confidence Score</div>
                        </div>
                    </div>

                    <!-- Risk Metrics -->
                    <div class="grid grid-cols-3 gap-4 relative z-10">
                        <div class="bg-luxury-black/40 p-4 rounded-lg border border-luxury-white/5">
                            <div class="text-xs text-luxury-white/40 uppercase mb-1">Drawdown Risk</div>
                            <div class="text-lg font-mono text-green-400">0.42%</div>
                        </div>
                        <div class="bg-luxury-black/40 p-4 rounded-lg border border-luxury-white/5">
                            <div class="text-xs text-luxury-white/40 uppercase mb-1">Sharpe Ratio</div>
                            <div class="text-lg font-mono text-luxury-gold">3.15</div>
                        </div>
                        <div class="bg-luxury-black/40 p-4 rounded-lg border border-luxury-white/5">
                            <div class="text-xs text-luxury-white/40 uppercase mb-1">Active Hedges</div>
                            <div class="text-lg font-mono text-luxury-blue">4</div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-luxury-white/5 relative z-10">
                        <button class="w-full py-3 bg-luxury-blue/10 hover:bg-luxury-blue/20 border border-luxury-blue/30 rounded-lg text-luxury-blue text-sm font-medium transition-colors">
                            View Detailed Risk Report
                        </button>
                    </div>
                </div>

                <!-- Recent Activity (1/3) -->
                <div class="obsidian-card p-6 rounded-xl">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-serif text-luxury-white">Live Feed</h3>
                        <a href="#" class="text-xs text-luxury-gold hover:text-luxury-white transition-colors">View All</a>
                    </div>

                    <div class="space-y-4">
                        {{-- Pending Withdrawals --}}
                        @foreach(Auth::user()->withdrawalRequests()->where('status', 'pending')->latest()->take(2)->get() as $withdrawal)
                            <div class="flex items-center justify-between p-3 rounded-lg bg-yellow-500/10 hover:bg-yellow-500/15 border border-yellow-500/20 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center bg-yellow-500/10 text-yellow-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-sm text-luxury-white font-medium flex items-center gap-2">
                                            Withdrawal Request
                                            <span class="text-xs px-2 py-0.5 bg-yellow-500/20 text-yellow-400 rounded-full uppercase tracking-wider">Pending</span>
                                        </div>
                                        <div class="text-xs text-luxury-white/40">{{ $withdrawal->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm font-mono text-yellow-400">
                                        -${{ number_format($withdrawal->amount, 2) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- Transaction Logs --}}
                        @forelse(Auth::user()->transactionLogs->sortByDesc('created_at')->take(3) as $log)
                            <div class="flex items-center justify-between p-3 rounded-lg bg-luxury-white/5 hover:bg-luxury-white/10 transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full flex items-center justify-center
                                        @if($log->transaction_type == 'deposit') bg-green-500/10 text-green-400
                                        @elseif($log->transaction_type == 'roi_growth') bg-blue-500/10 text-blue-400
                                        @else bg-red-500/10 text-red-400 @endif">
                                        @if($log->transaction_type == 'deposit')
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                                        @elseif($log->transaction_type == 'roi_growth')
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                        @else
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="text-sm text-luxury-white font-medium">
                                            {{ str_replace('_', ' ', ucfirst($log->transaction_type)) }}
                                        </div>
                                        <div class="text-xs text-luxury-white/40">{{ $log->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm font-mono {{ $log->amount >= 0 ? 'text-green-400' : 'text-red-400' }}">
                                        {{ $log->amount >= 0 ? '+' : '' }}${{ number_format($log->amount, 2) }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            @if(Auth::user()->withdrawalRequests()->where('status', 'pending')->count() == 0)
                                <div class="text-center py-8 text-luxury-white/40 text-sm">
                                    No recent activity
                                </div>
                            @endif
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Global AI Performance Chart -->
            <div class="obsidian-card p-6 rounded-2xl relative overflow-hidden">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-serif text-luxury-white">Global AI Performance</h3>
                        <p class="text-xs text-luxury-white/40">Total profit generated by the Sovereign Engine this year</p>
                    </div>
                </div>
                <div class="h-[350px] w-full relative">
                    <canvas id="portfolio-chart"></canvas>
                </div>
            </div>
            
            <!-- Deposit CTA (if empty) -->
            @if((Auth::user()->accountBalance->current_balance ?? 0) == 0)
            <div class="obsidian-card p-8 rounded-xl border border-luxury-gold/20 bg-luxury-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-serif text-luxury-white mb-2">Activate Your Account</h3>
                        <p class="text-luxury-white/60 max-w-xl">Your AI trading engine is currently idle. Deposit capital to initialize the high-frequency trading algorithms.</p>
                    </div>
                    <button onclick="document.getElementById('deposit-modal').showModal()" class="px-6 py-3 bg-luxury-gold text-luxury-black font-bold rounded-lg hover:bg-white transition-colors">
                        Deposit Capital
                    </button>
                </div>
            </div>
            @endif

        </div>
    </div>
    <!-- Deposit Modal -->
    <dialog id="deposit-modal" class="modal bg-black/80 backdrop-blur-sm p-0 rounded-2xl overflow-hidden w-full max-w-md border border-luxury-gold/20 shadow-2xl shadow-luxury-gold/10">
        <div class="obsidian-card p-8 relative">
            <!-- Close Button -->
            <button onclick="document.getElementById('deposit-modal').close()" class="absolute top-4 right-4 text-luxury-white/40 hover:text-luxury-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="text-center mb-8">
                <div class="w-16 h-16 mx-auto bg-luxury-gold/10 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-luxury-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-serif text-luxury-white mb-2">Deposit Bitcoin</h3>
                <p class="text-luxury-white/60 text-sm">Send BTC to the address below to fund your AI trading account.</p>
            </div>

            <div class="space-y-6">
                <div class="bg-black/40 p-4 rounded-xl border border-luxury-white/10">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs text-luxury-white/40 uppercase tracking-widest">BTC Wallet Address</span>
                        <span class="text-xs text-luxury-gold">Network: Bitcoin (BTC)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <code class="flex-1 bg-transparent text-luxury-white font-mono text-sm break-all" id="btc-address">bc1qxygjfg47are2su0l7kxmx28tqw62tugtn4jrdh</code>
                        <button onclick="navigator.clipboard.writeText(document.getElementById('btc-address').innerText); this.innerHTML = 'Copied!'; setTimeout(() => this.innerHTML = 'Copy', 2000);" class="p-2 bg-luxury-white/5 hover:bg-luxury-white/10 rounded-lg text-luxury-white/60 hover:text-luxury-white transition-colors text-xs font-bold uppercase tracking-wider">
                            Copy
                        </button>
                    </div>
                </div>

                <div class="flex items-start gap-3 p-4 bg-blue-500/5 rounded-xl border border-blue-500/10">
                    <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-xs text-blue-200/80 leading-relaxed">
                        Deposits are automatically credited after 2 network confirmations. Your AI trading engine will initialize immediately upon funding.
                    </p>
                </div>


                <form action="{{ route('deposit.confirm') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-4 bg-luxury-gold text-luxury-black font-bold rounded-xl hover:bg-white transition-colors shadow-lg shadow-luxury-gold/20">
                        I've Sent It
                    </button>
                </form>
            </div>
        </div>
    </dialog>

    <!-- Withdraw Modal -->
    <dialog id="withdraw-modal" class="modal bg-black/80 backdrop-blur-sm p-0 rounded-2xl overflow-hidden w-full max-w-md border border-luxury-white/10 shadow-2xl">
        <div class="obsidian-card p-8 relative" x-data="{
            amount: '',
            btcAddress: '',
            maxBalance: {{ Auth::user()->accountBalance->current_balance ?? 0 }},
            setMax() {
                this.amount = this.maxBalance;
            }
        }">
            <!-- Close Button -->
            <button onclick="document.getElementById('withdraw-modal').close()" class="absolute top-4 right-4 text-luxury-white/40 hover:text-luxury-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="text-center mb-8">
                <div class="w-16 h-16 mx-auto bg-luxury-white/5 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-luxury-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                </div>
                <h3 class="text-2xl font-serif text-luxury-white mb-2">Request Withdrawal</h3>
                <p class="text-luxury-white/60 text-sm">Withdrawals are processed within 24 hours.</p>
            </div>

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-xl">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="text-sm text-red-200">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('withdrawal.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-xs text-luxury-white/40 uppercase tracking-widest mb-2">Amount (USD)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-luxury-white/40">$</span>
                        <input 
                            type="number" 
                            name="amount"
                            x-model="amount"
                            placeholder="0.00" 
                            step="0.01"
                            min="0.01"
                            :max="maxBalance"
                            required
                            class="w-full bg-black/40 border border-luxury-white/10 rounded-xl py-3 pl-8 pr-4 text-luxury-white focus:border-luxury-gold/50 focus:ring-0 transition-colors">
                    </div>
                    <div class="flex justify-between mt-2 text-xs">
                        <span class="text-luxury-white/40">Available: ${{ number_format(Auth::user()->accountBalance->current_balance ?? 0, 2) }}</span>
                        <button type="button" @click="setMax()" class="text-luxury-gold hover:text-white transition-colors">Max</button>
                    </div>
                </div>

                <div>
                    <label class="block text-xs text-luxury-white/40 uppercase tracking-widest mb-2">BTC Wallet Address</label>
                    <input 
                        type="text" 
                        name="btc_address"
                        x-model="btcAddress"
                        placeholder="Enter your BTC address" 
                        required
                        class="w-full bg-black/40 border border-luxury-white/10 rounded-xl py-3 px-4 text-luxury-white focus:border-luxury-gold/50 focus:ring-0 transition-colors">
                </div>

                <button type="submit" class="w-full py-4 bg-luxury-white/10 text-luxury-white font-bold rounded-xl hover:bg-luxury-white/20 transition-colors border border-luxury-white/10">
                    Submit Request
                </button>
            </form>
        </div>
    </dialog>

</x-app-layout>
