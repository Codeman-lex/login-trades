/**
 * Omni-Terminal - Live Execution Visualizer
 * Simulates a high-frequency, multi-asset AI trading system
 */

export class OmniTerminal {
    constructor(containerId) {
        this.container = document.getElementById(containerId);
        if (!this.container) return;

        this.logs = [
            // Crypto High Frequency
            { text: "Scanning BTC/USD Order Book... Liquidity Gap Found", type: "info", color: "text-blue-400" },
            { text: "Executing Arbitrage: Binance > Coinbase... +0.42% Delta", type: "success", color: "text-green-400" },
            { text: "ETH Gas Fees Optimized: Route via L2... Saved $42.50", type: "success", color: "text-green-400" },
            { text: "Detecting Whale Movement: 500 BTC -> Cold Storage", type: "warning", color: "text-luxury-gold" },

            // Real Estate / Yields
            { text: "Analyzing Dubai Downtown Rental Yields... 8.4% Net", type: "info", color: "text-purple-400" },
            { text: "Commercial REITS Rebalancing... Sector Rotation Active", type: "info", color: "text-blue-400" },
            { text: "Mortgage Rate Hedge Executed... 10yr Treasury Lock", type: "success", color: "text-green-400" },

            // Global Finance / Tax
            { text: "Optimizing Tax Efficiency... Jurisdiction: Singapore", type: "warning", color: "text-luxury-gold" },
            { text: "Forex Hedges Active: EUR/USD, GBP/JPY... Risk Neutral", type: "info", color: "text-blue-400" },
            { text: "S&P 500 Volatility Scan... VIX < 15... Leverage Increased", type: "warning", color: "text-luxury-gold" },
            { text: "Dividends Reinvested: DRIP Protocol Active... Compound +", type: "success", color: "text-green-400" }
        ];

        this.maxLines = 8;
        this.init();
    }

    init() {
        this.container.innerHTML = ''; // Clear container
        this.container.classList.add('font-mono', 'text-xs', 'md:text-sm', 'overflow-hidden', 'h-full', 'flex', 'flex-col', 'justify-end', 'p-6');

        // Start the loop
        this.addLogLoop();
    }

    async addLogLoop() {
        while (true) {
            const log = this.logs[Math.floor(Math.random() * this.logs.length)];
            await this.typeLog(log);
            await this.wait(Math.random() * 1500 + 500); // Random delay between logs
        }
    }

    async typeLog(log) {
        const line = document.createElement('div');
        line.className = `mb-2 ${log.color} opacity-0 transition-opacity duration-300`;

        // Timestamp
        const time = new Date().toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' });
        const timestamp = `<span class="text-gray-500 mr-3">[${time}]</span>`;

        line.innerHTML = `${timestamp}<span class="typing-cursor"></span>`;
        this.container.appendChild(line);

        // Fade in
        requestAnimationFrame(() => line.classList.remove('opacity-0'));

        // Typewriter effect
        const textSpan = document.createElement('span');
        line.insertBefore(textSpan, line.lastElementChild); // Insert before cursor

        for (let i = 0; i < log.text.length; i++) {
            textSpan.textContent += log.text[i];
            await this.wait(Math.random() * 30 + 10); // Typing speed
        }

        // Remove cursor after typing
        line.lastElementChild.remove();

        // Maintain max lines (remove top)
        if (this.container.children.length > this.maxLines) {
            this.container.firstElementChild.remove();
        }
    }

    wait(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
}
