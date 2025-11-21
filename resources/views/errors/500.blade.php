<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>500 - Server Error | {{ config('app.name', 'Real AI Trading') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=outfit:300,400,500,600,700|playfair-display:400,600,700&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'Outfit', sans-serif;
                background-color: #0f0f13;
                color: #e2e8f0;
            }
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Playfair Display', serif;
            }
        </style>
    </head>
    <body class="antialiased flex items-center justify-center min-h-screen bg-[#0f0f13]">
        <div class="text-center px-6">
            <h1 class="text-9xl font-bold text-gray-800 dark:text-gray-800 mb-4">500</h1>
            <h2 class="text-3xl md:text-4xl font-serif text-white mb-6">Server Error</h2>
            <p class="text-gray-400 mb-8 max-w-md mx-auto">
                We are currently experiencing technical difficulties. Please try again later.
            </p>
            <a href="{{ url('/') }}" class="inline-block px-8 py-3 bg-white text-black font-semibold tracking-widest uppercase hover:bg-gray-200 transition duration-300">
                Return Home
            </a>
        </div>
    </body>
</html>
