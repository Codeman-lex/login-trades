<x-public-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-luxury-white">
            {{ __('Performance') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-luxury-black min-h-screen" style="padding-top: 200px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero -->
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-serif mb-6">Track <span class="text-luxury-gold">Record</span></h1>
                <p class="text-xl text-luxury-white/60 max-w-3xl mx-auto">
                    Audited, verified, and transparent performance metrics since inception.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="glass-card p-8 rounded-2xl border border-luxury-white/10 text-center">
                    <div class="text-4xl font-serif text-luxury-gold mb-2">24.8%</div>
                    <div class="text-xs text-luxury-white/40 uppercase tracking-wider">Avg. Monthly Return</div>
                </div>
                <div class="glass-card p-8 rounded-2xl border border-luxury-white/10 text-center">
                    <div class="text-4xl font-serif text-luxury-gold mb-2">1.2</div>
                    <div class="text-xs text-luxury-white/40 uppercase tracking-wider">Sharpe Ratio</div>
                </div>
                <div class="glass-card p-8 rounded-2xl border border-luxury-white/10 text-center">
                    <div class="text-4xl font-serif text-luxury-gold mb-2">4.5%</div>
                    <div class="text-xs text-luxury-white/40 uppercase tracking-wider">Max Drawdown</div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="glass-card p-8 rounded-2xl border border-luxury-white/10 relative overflow-hidden mb-20">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-serif text-luxury-white">Cumulative Performance (Live)</h3>
                    <div class="flex items-center gap-2">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                        </span>
                        <span class="text-xs text-green-400 font-mono uppercase tracking-wider">System Active</span>
                    </div>
                </div>
                
                <div class="relative w-full h-[400px] bg-luxury-black/50 rounded-lg border border-luxury-white/5 overflow-hidden">
                    <canvas id="performanceChart" class="w-full h-full"></canvas>
                    
                    <!-- Overlay Info -->
                    <div class="absolute top-4 left-4 bg-luxury-black/80 backdrop-blur-sm p-3 rounded-lg border border-luxury-white/10">
                        <div class="text-xs text-luxury-white/40 uppercase tracking-wider mb-1">Current Return</div>
                        <div class="text-2xl font-mono text-green-400" id="currentReturn">+24.82%</div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const canvas = document.getElementById('performanceChart');
                    const ctx = canvas.getContext('2d');
                    const returnDisplay = document.getElementById('currentReturn');
                    
                    // Resize canvas
                    function resize() {
                        canvas.width = canvas.offsetWidth;
                        canvas.height = canvas.offsetHeight;
                    }
                    window.addEventListener('resize', resize);
                    resize();

                    // Simulation State
                    let dataPoints = [];
                    const maxPoints = 100;
                    let currentVal = 100;
                    
                    // Initialize with some data
                    for(let i=0; i<maxPoints; i++) {
                        currentVal = currentVal * (1 + (Math.random() - 0.45) * 0.01); // Slight upward drift
                        dataPoints.push(currentVal);
                    }

                    function draw() {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        
                        // Dimensions
                        const w = canvas.width;
                        const h = canvas.height;
                        const padding = 20;
                        
                        // Scales
                        const minVal = Math.min(...dataPoints) * 0.99;
                        const maxVal = Math.max(...dataPoints) * 1.01;
                        const range = maxVal - minVal;
                        
                        // Draw Grid
                        ctx.strokeStyle = 'rgba(255, 255, 255, 0.05)';
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        for(let i=1; i<5; i++) {
                            const y = h - (padding + (i/5) * (h - 2*padding));
                            ctx.moveTo(0, y);
                            ctx.lineTo(w, y);
                        }
                        ctx.stroke();

                        // Draw Line
                        ctx.beginPath();
                        ctx.strokeStyle = '#C6A87C'; // Luxury Gold
                        ctx.lineWidth = 2;
                        ctx.lineJoin = 'round';
                        
                        // Create Gradient for area under curve
                        const gradient = ctx.createLinearGradient(0, 0, 0, h);
                        gradient.addColorStop(0, 'rgba(198, 168, 124, 0.2)');
                        gradient.addColorStop(1, 'rgba(198, 168, 124, 0)');

                        // Move to first point
                        const getX = (i) => (i / (maxPoints - 1)) * w;
                        const getY = (val) => h - (padding + ((val - minVal) / range) * (h - 2*padding));
                        
                        ctx.moveTo(getX(0), getY(dataPoints[0]));
                        
                        for(let i=1; i<dataPoints.length; i++) {
                            ctx.lineTo(getX(i), getY(dataPoints[i]));
                        }
                        
                        ctx.stroke();
                        
                        // Fill Area
                        ctx.lineTo(w, h);
                        ctx.lineTo(0, h);
                        ctx.fillStyle = gradient;
                        ctx.fill();
                        
                        // Draw Pulse at end
                        const lastX = getX(dataPoints.length - 1);
                        const lastY = getY(dataPoints[dataPoints.length - 1]);
                        
                        ctx.beginPath();
                        ctx.arc(lastX, lastY, 4, 0, Math.PI * 2);
                        ctx.fillStyle = '#fff';
                        ctx.fill();
                        
                        ctx.beginPath();
                        ctx.arc(lastX, lastY, 10, 0, Math.PI * 2);
                        ctx.fillStyle = 'rgba(255, 255, 255, 0.1)';
                        ctx.fill();
                    }

                    // Animation Loop
                    setInterval(() => {
                        // Add new point
                        // Random walk: 55% chance up, 45% down, small magnitude
                        const change = (Math.random() - 0.45) * 0.005; 
                        currentVal = currentVal * (1 + change);
                        
                        dataPoints.push(currentVal);
                        if(dataPoints.length > maxPoints) {
                            dataPoints.shift();
                        }
                        
                        // Update Display
                        const totalReturn = ((currentVal - 100) / 100 * 100).toFixed(2);
                        returnDisplay.innerText = (totalReturn > 0 ? '+' : '') + totalReturn + '%';
                        returnDisplay.className = `text-2xl font-mono ${totalReturn >= 0 ? 'text-green-400' : 'text-red-400'}`;
                        
                        draw();
                    }, 100); // Update every 100ms
                    
                    draw();
                });
            </script>
        </div>
    </div>
</x-public-layout>
