<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI² Engineering - Hiring Campaign</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Custom Configuration for True Gold Palette -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              gold: {
                300: '#FDE047', /* Bright highlight */
                400: '#FCD34D', /* Soft gold */
                500: '#D4AF37', /* True Metallic Gold */
                600: '#B48A2D', /* Deep gold shadow */
                700: '#8C6819', /* Dark structural gold */
              }
            }
          }
        }
      }
    </script>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #020617; /* slate-950 */
            color: #e2e8f0; /* slate-200 */
        }
        /* Subtle glowing grid background */
        .bg-grid-pattern {
            background-image: 
                linear-gradient(to right, rgba(212, 175, 55, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(212, 175, 55, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .glow-text {
            text-shadow: 0 0 25px rgba(212, 175, 55, 0.5);
        }
    </style>
</head>
<body class="antialiased selection:bg-gold-500 selection:text-black relative">

    <!-- 1. Navigation / Header -->
    <header class="fixed top-0 w-full z-50 bg-slate-950/85 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex flex-col">
                <h1 class="text-2xl font-bold text-white tracking-wide flex items-center">
                    AI<sup class="text-gold-500 ml-0.5">2</sup>
                    <span class="ml-2 font-light text-slate-300">ENGINEERING</span>
                </h1>
                <p class="text-xs uppercase text-gold-400 tracking-widest font-semibold mt-1">Building the infrastructure for AI-assisted engineering</p>
            </div>
            <a href="#apply" class="px-6 py-2 rounded-full border border-gold-500 text-gold-500 font-semibold hover:bg-gold-500 hover:text-black hover:shadow-[0_0_15px_rgba(212,175,55,0.6)] transition-all duration-300">
                Apply Now
            </a>
        </div>
    </header>

    <!-- 2. Hero Section -->
    <section class="relative min-h-screen flex flex-col justify-center items-center pt-24 pb-12 px-6 overflow-hidden">
        
        <!-- Hero Background Image & Overlays -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-20"></div>
        <div class="absolute inset-0 bg-slate-950/70 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-grid-pattern z-0"></div>
        
        <!-- Ambient Background Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gold-500/15 rounded-full blur-[120px] pointer-events-none z-0"></div>

        <div class="relative z-10 text-center max-w-5xl mx-auto">
            <p class="text-xl md:text-2xl font-bold text-white tracking-[0.3em] mb-6 animate-pulse">WE ARE HIRING</p>
            
            <div class="border-y-2 border-gold-500/50 py-8 mb-8 relative bg-slate-950/40 backdrop-blur-sm rounded-lg px-4 shadow-[0_0_30px_rgba(212,175,55,0.1)]">
                <!-- Decorative Corner Accents -->
                <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-gold-400 -mt-[2px] -ml-[2px]"></div>
                <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-gold-400 -mb-[2px] -mr-[2px]"></div>
                
                <h2 class="text-5xl md:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gold-300 via-gold-500 to-gold-700 glow-text leading-tight">
                    ENGINEERING<br>INTELLIGENT FELLOWSHIP
                </h2>
            </div>
            
            <p class="text-lg md:text-xl text-slate-200 max-w-2xl mx-auto flex items-center justify-center gap-3 drop-shadow-lg">
                <svg class="w-6 h-6 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                Help build the future infrastructure layer for AI-assisted engineering.
            </p>
        </div>

        <div class="absolute bottom-6 flex flex-col items-center opacity-60 hover:opacity-100 transition-opacity z-10">
            <span class="text-xs text-slate-400 mb-2 tracking-wider">POWERED BY</span>
            <div class="flex gap-4 items-center">
                <span class="text-sm font-bold text-white flex items-center gap-1"><span class="text-[#EF4223] text-lg">🔥</span> CI4</span>
                <span class="text-slate-600">|</span>
                <span class="text-sm font-bold text-[#38BDF8] flex items-center gap-1"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg> Tailwind</span>
            </div>
        </div>
    </section>

    <hr class="border-slate-800">

    <!-- 3. Key Highlights Section (The "Chips" with Images) -->
    <section class="max-w-7xl mx-auto px-6 py-20 relative z-10 -mt-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            
            <!-- Chip 1: Remote -->
            <div class="relative bg-slate-900 border border-slate-800 rounded-xl hover:border-gold-500 hover:shadow-[0_0_20px_rgba(212,175,55,0.2)] hover:-translate-y-1 transition-all duration-300 group cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=800&auto=format&fit=crop')] bg-cover bg-center opacity-20 group-hover:opacity-40 group-hover:scale-105 transition-all duration-500 z-0"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/80 to-transparent z-0"></div>
                <div class="relative z-10 p-6 flex flex-col h-full justify-end min-h-[160px]">
                    <svg class="w-10 h-10 text-gold-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="font-semibold text-white text-lg">Hybrid / Remote</h3>
                </div>
            </div>

            <!-- Chip 2: Global -->
            <div class="relative bg-slate-900 border border-slate-800 rounded-xl hover:border-gold-500 hover:shadow-[0_0_20px_rgba(212,175,55,0.2)] hover:-translate-y-1 transition-all duration-300 group cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=800&auto=format&fit=crop')] bg-cover bg-center opacity-20 group-hover:opacity-40 group-hover:scale-105 transition-all duration-500 z-0"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/80 to-transparent z-0"></div>
                <div class="relative z-10 p-6 flex flex-col h-full justify-end min-h-[160px]">
                    <svg class="w-10 h-10 text-gold-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    <h3 class="font-semibold text-white text-lg">Global OEMs</h3>
                </div>
            </div>

            <!-- Chip 3: Exposure -->
            <div class="relative bg-slate-900 border border-slate-800 rounded-xl hover:border-gold-500 hover:shadow-[0_0_20px_rgba(212,175,55,0.2)] hover:-translate-y-1 transition-all duration-300 group cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800&auto=format&fit=crop')] bg-cover bg-center opacity-20 group-hover:opacity-40 group-hover:scale-105 transition-all duration-500 z-0"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/80 to-transparent z-0"></div>
                <div class="relative z-10 p-6 flex flex-col h-full justify-end min-h-[160px]">
                    <svg class="w-10 h-10 text-gold-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h3 class="font-semibold text-white text-lg">Real Exposure</h3>
                </div>
            </div>

            <!-- Chip 4: IT IS PAID -->
            <div class="relative bg-slate-900 border border-gold-500/50 rounded-xl hover:border-gold-500 hover:shadow-[0_0_25px_rgba(212,175,55,0.3)] hover:-translate-y-1 transition-all duration-300 group cursor-pointer overflow-hidden shadow-[0_0_10px_rgba(212,175,55,0.1)]">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=800&auto=format&fit=crop')] bg-cover bg-center opacity-15 group-hover:opacity-30 group-hover:scale-105 transition-all duration-500 z-0 mix-blend-luminosity"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-gold-900/80 via-slate-900/90 to-slate-900/80 z-0"></div>
                <div class="relative z-10 p-6 flex flex-col h-full justify-end min-h-[160px]">
                    <svg class="w-10 h-10 text-gold-400 mb-4 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="font-extrabold text-gold-400 text-xl tracking-wide drop-shadow-md">IT IS PAID</h3>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. Mission Statement -->
    <section class="relative bg-slate-900 border-y border-slate-800 overflow-hidden">
        <!-- System Map SVG Background Pattern in Gold -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M54.627 0l.83.83v58.34l-.83.83H.83l-.83-.83V.83L.83 0h53.797zm-1.66 1.66H1.66v56.68h51.307V1.66zM28 28v4h4v-4h-4zm0-10v4h4v-4h-4zm0 20v4h4v-4h-4zm-10-10v4h4v-4h-4zm20 0v4h4v-4h-4z\' fill=\'%23D4AF37\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>
        
        <div class="max-w-4xl mx-auto px-6 py-24 text-center relative z-10 flex flex-col items-center">
            <svg class="w-16 h-16 text-gold-500 mb-8 drop-shadow-[0_0_10px_rgba(212,175,55,0.3)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            <p class="text-2xl md:text-3xl font-light text-white leading-relaxed">
                "We are building a new generation of <span class="font-semibold text-gold-500 drop-shadow-sm">AI-assisted engineering</span> support infrastructure connecting global manufacturers, engineers, and future technical leaders."
            </p>
        </div>
    </section>

    <!-- 5. The Details Section -->
    <section class="max-w-7xl mx-auto px-6 py-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 md:divide-x divide-slate-800">
            
            <!-- Column 1 -->
            <div class="md:pr-8">
                <h3 class="text-xl font-bold text-white mb-8 border-b border-slate-800 pb-4">WHAT YOU'LL WORK ON</h3>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="bg-slate-900 p-2 rounded border border-slate-700 text-gold-400 mt-1"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg></div>
                        <div>
                            <strong class="block text-white">Full-Stack Platform Development</strong>
                            <span class="text-sm text-slate-400">CI4, PHP, Tailwind CSS</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="bg-slate-900 p-2 rounded border border-slate-700 text-gold-400 mt-1"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg></div>
                        <span class="text-slate-300 mt-1 font-medium">Engineering & Technical Support</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="bg-slate-900 p-2 rounded border border-slate-700 text-gold-400 mt-1"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg></div>
                        <span class="text-slate-300 mt-1 font-medium">BOM & Supply Chain Intelligence</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="bg-slate-900 p-2 rounded border border-gold-500 text-gold-400 mt-1 shadow-[0_0_10px_rgba(212,175,55,0.2)]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
                        <span class="text-white mt-1 font-bold">AI-Assisted Engineering Operations</span>
                    </li>
                </ul>
            </div>

            <!-- Column 2 -->
            <div class="md:px-8">
                <h3 class="text-xl font-bold text-white mb-8 border-b border-slate-800 pb-4">WHO WE'RE LOOKING FOR</h3>
                <ul class="space-y-8">
                    <li class="flex items-start gap-4">
                        <div class="bg-slate-900 p-3 rounded-full border border-slate-700 text-gold-400"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg></div>
                        <div>
                            <strong class="block text-white mb-1 uppercase text-sm tracking-wider">Background</strong>
                            <span class="text-slate-300 leading-relaxed text-sm">Electronics, Mechanical Engineering, or Software Development with a strong interest in hardware.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="bg-slate-900 p-3 rounded-full border border-slate-700 text-gold-400"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                        <div>
                            <strong class="block text-white mb-1 uppercase text-sm tracking-wider">Ideal Traits</strong>
                            <span class="text-slate-300 leading-relaxed text-sm">Curious & highly motivated.<br>Detail-oriented.<br>Strong communicator.</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="md:pl-8">
                <h3 class="text-xl font-bold text-white mb-8 border-b border-slate-800 pb-4">WHAT YOU'LL GAIN</h3>
                <ul class="space-y-6">
                    <li class="flex items-center gap-4 group">
                        <div class="p-2 text-slate-500 group-hover:text-gold-400 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg></div>
                        <span class="text-slate-200 group-hover:text-white transition-colors font-medium">Real-world engineering exposure</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="p-2 text-slate-500 group-hover:text-gold-400 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
                        <span class="text-slate-200 group-hover:text-white transition-colors font-medium">Mentorship from industry pros</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="p-2 text-slate-500 group-hover:text-gold-400 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></div>
                        <span class="text-slate-200 group-hover:text-white transition-colors font-medium">Hands-on learning beyond university</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="p-2 text-slate-500 group-hover:text-gold-400 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg></div>
                        <span class="text-slate-200 group-hover:text-white transition-colors font-medium">Career growth & leadership paths</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- 6. Compensation & Setup -->
    <section class="max-w-7xl mx-auto px-6 mb-24">
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 relative overflow-hidden shadow-2xl">
            <!-- Decorative circuit lines in Gold -->
            <div class="absolute top-0 right-0 w-64 h-64 border-t border-r border-gold-500/20 rounded-tr-3xl -mt-4 -mr-4 pointer-events-none"></div>
            
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                <svg class="w-7 h-7 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                COMPENSATION & SETUP
            </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 relative z-10">
                <!-- Comp Card 1 -->
                <div class="bg-slate-800/80 backdrop-blur rounded-lg p-5 border-l-4 border-gold-500 hover:bg-slate-800 transition-colors flex items-center gap-4 shadow-[0_0_15px_rgba(212,175,55,0.05)]">
                    <div class="p-2 bg-gold-500/10 rounded-lg text-gold-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="font-bold text-gold-400 tracking-wide">IT IS PAID</span>
                </div>
                <!-- Comp Card 2 -->
                <div class="bg-slate-800/80 backdrop-blur rounded-lg p-5 border border-slate-700 hover:bg-slate-800 hover:border-slate-600 transition-colors flex items-center gap-4">
                    <div class="p-2 bg-slate-900 rounded-lg text-slate-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="font-medium text-white">Flexible Schedules</span>
                </div>
                <!-- Comp Card 3 -->
                <div class="bg-slate-800/80 backdrop-blur rounded-lg p-5 border border-slate-700 hover:bg-slate-800 hover:border-slate-600 transition-colors flex items-center gap-4">
                    <div class="p-2 bg-slate-900 rounded-lg text-slate-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <span class="font-medium text-white">Remote-Friendly</span>
                </div>
                <!-- Comp Card 4 -->
                <div class="bg-slate-800/80 backdrop-blur rounded-lg p-5 border border-slate-700 hover:bg-slate-800 hover:border-slate-600 transition-colors flex items-center gap-4">
                    <div class="p-2 bg-slate-900 rounded-lg text-slate-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <span class="font-medium text-white">Growth Opportunities</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Footer -->
    <footer class="bg-black relative overflow-hidden py-16 px-6">
        <!-- Abstract Background Node Design for Footer in Gold -->
        <div class="absolute inset-0 opacity-15 pointer-events-none flex justify-center items-center">
            <div class="w-[800px] h-[300px] border border-gold-500/30 rounded-[100%] absolute transform rotate-12"></div>
            <div class="w-[600px] h-[200px] border border-gold-500/40 rounded-[100%] absolute transform -rotate-6"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10 flex flex-col items-center">
            <h2 class="text-3xl md:text-4xl font-semibold text-white tracking-[0.2em] mb-4">
                BUILD. LEARN. IMPACT THE FUTURE.
            </h2>
            <div class="w-24 h-1 bg-gold-500 rounded my-4 shadow-[0_0_10px_rgba(212,175,55,0.5)]"></div>
            <p class="text-gold-400 tracking-wider text-sm md:text-base font-medium">
                EXPOSURE + LEARNING + REAL INDUSTRY EXPERIENCE = YOUR FUTURE STARTS HERE.
            </p>
            
            <a id="apply" href="mailto:careers@ai2engineering.com" class="mt-12 px-8 py-3 bg-gold-500 text-black font-bold uppercase tracking-wider rounded shadow-[0_0_20px_rgba(212,175,55,0.4)] hover:bg-gold-400 hover:shadow-[0_0_30px_rgba(212,175,55,0.6)] transition-all duration-300 hover:-translate-y-0.5">
                Submit Your Application
            </a>
            
            <p class="text-slate-600 text-xs mt-12">&copy; <?= date('Y') ?> AI² Engineering. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>