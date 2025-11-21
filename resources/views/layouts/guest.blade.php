<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-luxury-white antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-luxury-black relative overflow-hidden">
            <!-- Background -->
            <div class="absolute inset-0 bg-[url('/images/hero.png')] bg-cover bg-center opacity-20"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-luxury-black/80 via-luxury-black/90 to-luxury-black"></div>
            
            <!-- Logo -->
            <div class="relative z-10">
                <a href="/">
                    <img src="/images/logo.png" alt="Logo" class="w-20 h-20">
                </a>
            </div>

            <!-- Content Card -->
            <div class="w-full sm:max-w-md mt-6 px-8 py-8 glass-card rounded-xl border border-luxury-white/10 shadow-2xl relative z-10">
                {{ $slot }}
            </div>
        </div>
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
