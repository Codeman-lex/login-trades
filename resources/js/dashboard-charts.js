/**
 * Dashboard Charts - Premium Financial Visualization
 * Uses Chart.js to render the "Portfolio Performance" area chart.
 */

export class DashboardCharts {
    constructor(canvasId) {
        this.canvas = document.getElementById(canvasId);
        if (!this.canvas) return;

        this.ctx = this.canvas.getContext('2d');
        this.initChart();
    }

    initChart() {
        // Create Gradient
        const gradient = this.ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)'); // Blue start
        gradient.addColorStop(1, 'rgba(59, 130, 246, 0)');   // Transparent end

        const data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Total AI Profit',
                data: [1.2, 1.5, 1.8, 2.1, 2.4, 2.3, 2.7, 2.9, 3.1, 3.2, 3.4, 3.8], // Billions
                borderColor: '#3B82F6', // Luxury Blue
                backgroundColor: gradient,
                borderWidth: 3,
                pointBackgroundColor: '#050505',
                pointBorderColor: '#3B82F6',
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
                fill: true,
                tension: 0.4 // Smooth curves
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(5, 5, 5, 0.9)',
                        titleColor: '#9CA3AF',
                        bodyColor: '#fff',
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        padding: 12,
                        displayColors: false,
                        callbacks: {
                            label: function (context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += '$' + context.parsed.y + 'B';
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)',
                            drawBorder: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.4)',
                            font: {
                                family: "'Outfit', sans-serif"
                            }
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)',
                            drawBorder: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.4)',
                            font: {
                                family: "'Outfit', sans-serif"
                            },
                            callback: function (value) {
                                return '$' + value + 'B';
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
            }
        };

        new Chart(this.ctx, config);
    }
}
