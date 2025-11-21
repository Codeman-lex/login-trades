import './bootstrap';
import Alpine from 'alpinejs';
import { NeuralVoid } from './neural-void';
import { OmniTerminal } from './omni-terminal';
import { DashboardCharts } from './dashboard-charts';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // Initialize Neural Void if canvas exists
    if (document.getElementById('neural-canvas')) {
        new NeuralVoid('neural-canvas');
    }

    // Initialize Omni Terminal if container exists
    if (document.getElementById('omni-terminal')) {
        new OmniTerminal('omni-terminal');
    }

    // Initialize Dashboard Charts if canvas exists
    if (document.getElementById('portfolio-chart')) {
        new DashboardCharts('portfolio-chart');
    }
});
