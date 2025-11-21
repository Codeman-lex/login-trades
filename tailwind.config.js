import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                luxury: {
                    black: '#050505', // Darker black for more depth
                    charcoal: '#0a0a0a',
                    gold: '#D4AF37',
                    'gold-light': '#F3E5AB',
                    'gold-dark': '#AA8C2C',
                    navy: '#0a192f', // Deeper navy
                    'navy-light': '#112240',
                    'navy-lighter': '#233554',
                    white: '#e6f1ff', // Soft white/blue for text
                    blue: '#3B82F6', // Electric Blue
                    magenta: '#E879F9', // Neon Magenta
                }
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'hero-glow': 'conic-gradient(from 90deg at 50% 50%, #0a192f 0%, #050505 50%, #0a192f 100%)',
            }
        },
    },

    plugins: [forms],
};
