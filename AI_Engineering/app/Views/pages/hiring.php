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
                900: '#423005', /* Almost black gold */
              }
            }
          }
        }
      }
    </script>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800;900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #020617; /* slate-950 */
            color: #e2e8f0; /* slate-200 */
        }
        
        .glow-text {
            text-shadow: 0 0 25px rgba(212, 175, 55, 0.5);
        }

        /* Custom CSS to make cards look like physical Microchips (ICs) */
        .microchip-container {
            position: relative;
            z-index: 10;
        }
        .microchip-body {
            position: relative;
            background: linear-gradient(145deg, #0f172a 0%, #020617 100%);
            border: 1px solid #1e293b;
            border-radius: 4px;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.8), 0 10px 30px rgba(0,0,0,0.5);
            transition: all 0.3s ease;
        }
        /* Gold Pins on the sides */
        .microchip-body::before, .microchip-body::after {
            content: '';
            position: absolute;
            top: 20px; bottom: 20px;
            width: 8px;
            background: repeating-linear-gradient(
                to bottom,
                #8C6819,
                #8C6819 8px,
                transparent 8px,
                transparent 16px
            );
            z-index: -1;
            transition: all 0.4s ease;
        }
        .microchip-body::before { 
            left: -8px; 
            border-radius: 2px 0 0 2px; 
        }
        .microchip-body::after { 
            right: -8px; 
            border-radius: 0 2px 2px 0; 
        }
        
        /* Hover effects - Pins light up */
        .group:hover .microchip-body {
            border-color: #D4AF37;
            transform: translateY(-4px);
            box-shadow: inset 0 0 20px rgba(212,175,55,0.05), 0 15px 40px rgba(0,0,0,0.8);
        }
        .group:hover .microchip-body::before, .group:hover .microchip-body::after {
            background: repeating-linear-gradient(
                to bottom,
                #FDE047,
                #FDE047 8px,
                transparent 8px,
                transparent 16px
            );
            box-shadow: 0 0 15px rgba(212,175,55,0.6);
        }

        /* Abstract Circuit Trace SVG Pattern */
        .bg-circuit-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 10h20v20h20v-20h20v20h20 M30 30v40 M70 30v40 M10 90h80 M50 30v20h20' stroke='%23D4AF37' stroke-width='0.5' fill='none' opacity='0.3'/%3E%3Ccircle cx='30' cy='30' r='2' fill='%23D4AF37' opacity='0.5'/%3E%3Ccircle cx='70' cy='30' r='2' fill='%23D4AF37' opacity='0.5'/%3E%3Ccircle cx='50' cy='50' r='3' fill='%23D4AF37' opacity='0.5'/%3E%3C/svg%3E");
            background-size: 100px 100px;
        }
    </style>
</head>
<body class="antialiased selection:bg-gold-500 selection:text-black relative">

    <!-- 1. Navigation / Header -->
    <header class="fixed top-0 w-full z-50 bg-slate-950/90 backdrop-blur-md border-b border-gold-900/50 shadow-[0_4px_30px_rgba(0,0,0,0.5)]">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4 relative">
            <!-- Decorative trace line -->
            <div class="absolute bottom-0 left-10 w-32 h-[1px] bg-gold-500/50 shadow-[0_0_10px_rgba(212,175,55,0.8)]"></div>
            
            <div class="flex flex-col">
                <h1 class="text-2xl font-black text-white tracking-wide flex items-center">
                    AI<sup class="text-gold-500 ml-0.5">2</sup>
                    <span class="ml-2 font-light text-slate-300">ENGINEERING</span>
                </h1>
                <p class="text-[10px] uppercase text-gold-400 tracking-widest font-bold mt-1 opacity-80">Infrastructure for AI-assisted operations</p>
            </div>
            <a href="#apply" class="px-6 py-2 rounded-sm border border-gold-500/50 bg-gold-500/10 text-gold-400 font-semibold hover:bg-gold-500 hover:text-black hover:shadow-[0_0_20px_rgba(212,175,55,0.6)] transition-all duration-300 backdrop-blur">
                INITIATE APPLICATION
            </a>
        </div>
    </header>

    <!-- 2. Hero Section -->
    <section class="relative min-h-screen flex flex-col justify-center items-center pt-24 pb-12 px-6 overflow-hidden">
        
        <!-- Deep Board Background Image (Macro Motherboard) -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1518932945647-7a3c96943e28?q=80&w=2500&auto=format&fit=crop')] bg-cover bg-center opacity-[0.15] mix-blend-color-dodge"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-slate-950/95 to-slate-950 z-0"></div>
        
        <!-- Ambient Gold Core Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gold-500/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

        <div class="relative z-10 text-center max-w-5xl mx-auto mt-10">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900/80 border border-gold-900/50 mb-8 shadow-[0_0_15px_rgba(212,175,55,0.1)]">
                <span class="w-2 h-2 rounded-full bg-gold-500 animate-pulse shadow-[0_0_8px_rgba(212,175,55,0.8)]"></span>
                <span class="text-xs font-bold text-gold-400 tracking-[0.2em] uppercase">System Online • Hiring Active</span>
            </div>
            
            <div class="relative py-8 mb-8">
                <!-- Circuit board routing lines decorative overlay -->
                <svg class="absolute top-0 left-1/2 -translate-x-1/2 w-[120%] h-full opacity-20 pointer-events-none" fill="none" stroke="#D4AF37" stroke-width="1">
                    <path d="M 0,10 L 100,10 L 120,30 L 880,30 L 900,10 L 1000,10" />
                    <path d="M 0,90 L 100,90 L 120,70 L 880,70 L 900,90 L 1000,90" />
                    <circle cx="100" cy="10" r="3" fill="#D4AF37" />
                    <circle cx="900" cy="10" r="3" fill="#D4AF37" />
                    <circle cx="100" cy="90" r="3" fill="#D4AF37" />
                    <circle cx="900" cy="90" r="3" fill="#D4AF37" />
                </svg>
                
                <h2 class="text-5xl md:text-7xl font-black text-transparent bg-clip-text bg-gradient-to-br from-white via-gold-300 to-gold-700 glow-text leading-tight tracking-tight relative z-10">
                    INTELLIGENT<br>ENGINEERING FELLOWSHIP
                </h2>
            </div>
            
            <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto flex items-center justify-center gap-3 drop-shadow-lg font-light">
                Architect the hardware and software layers connecting global manufacturers and future technical leaders.
            </p>
        </div>

        <!-- Tech Stack Display at bottom -->
        <div class="absolute bottom-10 flex flex-col items-center opacity-60 hover:opacity-100 transition-opacity z-10 bg-slate-900/50 backdrop-blur px-8 py-3 rounded-md border border-slate-800">
            <span class="text-[10px] text-slate-400 mb-2 tracking-[0.3em] uppercase">Core Architecture</span>
            <div class="flex gap-6 items-center">
                <span class="text-sm font-bold text-slate-200 flex items-center gap-2"><span class="text-[#EF4223] text-lg">🔥</span> CI4 Framework</span>
                <div class="w-1 h-1 rounded-full bg-gold-600"></div>
                <span class="text-sm font-bold text-slate-200 flex items-center gap-2"><svg class="w-5 h-5 text-[#38BDF8]" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg> Tailwind</span>
            </div>
        </div>
    </section>

    <!-- 3. Key Highlights Section (The "Microchips") -->
    <section class="max-w-7xl mx-auto px-8 py-20 relative z-20 -mt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-6">
            
            <!-- Microchip 1 -->
            <div class="group cursor-pointer microchip-container h-full">
                <div class="microchip-body p-6 flex flex-col h-full justify-between min-h-[180px] relative overflow-hidden">
                    <!-- Chip core detail -->
                    <div class="absolute top-4 right-4 w-8 h-8 border border-gold-900/50 rounded flex items-center justify-center opacity-30 group-hover:opacity-100 transition-opacity">
                        <div class="w-3 h-3 bg-gold-600 rounded-sm"></div>
                    </div>
                    <svg class="w-10 h-10 text-gold-500 mb-4 drop-shadow-[0_0_8px_rgba(212,175,55,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <p class="text-[10px] text-gold-600 uppercase font-bold tracking-wider mb-1">Architecture</p>
                        <h3 class="font-bold text-white text-lg tracking-wide">Hybrid / Remote</h3>
                    </div>
                </div>
            </div>

            <!-- Microchip 2 -->
            <div class="group cursor-pointer microchip-container h-full">
                <div class="microchip-body p-6 flex flex-col h-full justify-between min-h-[180px] relative overflow-hidden">
                    <div class="absolute top-4 right-4 w-8 h-8 border border-gold-900/50 rounded flex items-center justify-center opacity-30 group-hover:opacity-100 transition-opacity">
                        <div class="w-3 h-3 bg-gold-600 rounded-sm"></div>
                    </div>
                    <svg class="w-10 h-10 text-gold-500 mb-4 drop-shadow-[0_0_8px_rgba(212,175,55,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    <div>
                        <p class="text-[10px] text-gold-600 uppercase font-bold tracking-wider mb-1">Network</p>
                        <h3 class="font-bold text-white text-lg tracking-wide">Global OEMs</h3>
                    </div>
                </div>
            </div>

            <!-- Microchip 3 -->
            <div class="group cursor-pointer microchip-container h-full">
                <div class="microchip-body p-6 flex flex-col h-full justify-between min-h-[180px] relative overflow-hidden">
                    <div class="absolute top-4 right-4 w-8 h-8 border border-gold-900/50 rounded flex items-center justify-center opacity-30 group-hover:opacity-100 transition-opacity">
                        <div class="w-3 h-3 bg-gold-600 rounded-sm"></div>
                    </div>
                    <svg class="w-10 h-10 text-gold-500 mb-4 drop-shadow-[0_0_8px_rgba(212,175,55,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <div>
                        <p class="text-[10px] text-gold-600 uppercase font-bold tracking-wider mb-1">Processing</p>
                        <h3 class="font-bold text-white text-lg tracking-wide">Real Exposure</h3>
                    </div>
                </div>
            </div>

            <!-- Microchip 4 - Highlighted -->
            <div class="group cursor-pointer microchip-container h-full">
                <!-- Special gold styling for the 'Paid' chip -->
                <div class="microchip-body p-6 flex flex-col h-full justify-between min-h-[180px] relative overflow-hidden border-gold-500/50 !shadow-[0_0_30px_rgba(212,175,55,0.15)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-gold-900/40 to-transparent z-0"></div>
                    <div class="absolute top-4 right-4 w-8 h-8 border border-gold-500 rounded flex items-center justify-center opacity-80 group-hover:shadow-[0_0_10px_rgba(212,175,55,0.5)]">
                        <div class="w-3 h-3 bg-gold-400 rounded-sm shadow-[0_0_8px_rgba(212,175,55,0.8)]"></div>
                    </div>
                    <svg class="w-10 h-10 text-gold-300 mb-4 drop-shadow-[0_0_12px_rgba(212,175,55,0.8)] relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="relative z-10">
                        <p class="text-[10px] text-gold-400 uppercase font-bold tracking-wider mb-1">Status</p>
                        <h3 class="font-black text-gold-400 text-xl tracking-wider drop-shadow-md">IT IS PAID</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. The Details Section (Technical Specs) -->
    <section class="max-w-7xl mx-auto px-6 py-24 relative">
        <!-- Background Trace lines connecting sections -->
        <div class="absolute left-1/3 top-0 w-[1px] h-full bg-gradient-to-b from-transparent via-gold-900/30 to-transparent -z-10"></div>
        <div class="absolute right-1/3 top-0 w-[1px] h-full bg-gradient-to-b from-transparent via-gold-900/30 to-transparent -z-10"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 bg-slate-900/30 p-8 md:p-12 rounded-lg border border-slate-800 shadow-2xl backdrop-blur-sm relative overflow-hidden">
            <!-- Decorative corner nodes -->
            <div class="absolute top-0 left-0 w-3 h-3 border-r border-b border-gold-600"></div>
            <div class="absolute bottom-0 right-0 w-3 h-3 border-l border-t border-gold-600"></div>

            <!-- Column 1 -->
            <div class="md:pr-8 relative">
                <h3 class="text-xs font-black text-gold-500 mb-8 tracking-[0.2em] uppercase flex items-center gap-3">
                    <span class="w-4 h-[1px] bg-gold-500"></span> Output Vectors
                </h3>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="mt-1 text-gold-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg></div>
                        <div>
                            <strong class="block text-white font-bold tracking-wide text-lg">Full-Stack Development</strong>
                            <span class="text-sm text-slate-400">CI4, PHP, Tailwind CSS logic layer.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 text-gold-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg></div>
                        <span class="text-slate-300 mt-1 font-medium">Engineering & Technical Support protocols.</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 text-gold-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg></div>
                        <span class="text-slate-300 mt-1 font-medium">BOM & Supply Chain Data Structuring.</span>
                    </li>
                </ul>
            </div>

            <!-- Column 2 -->
            <div class="md:px-8 border-t md:border-t-0 md:border-l border-slate-800 pt-8 md:pt-0">
                <h3 class="text-xs font-black text-gold-500 mb-8 tracking-[0.2em] uppercase flex items-center gap-3">
                    <span class="w-4 h-[1px] bg-gold-500"></span> Input Requirements
                </h3>
                <ul class="space-y-8">
                    <li class="flex items-start gap-4">
                        <div class="p-2 bg-slate-950 border border-slate-800 rounded text-gold-500 shadow-[inset_0_0_8px_rgba(212,175,55,0.1)]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                        <div>
                            <strong class="block text-white mb-1 tracking-wide">Base Knowledge</strong>
                            <span class="text-slate-400 leading-relaxed text-sm">Electronics, Mechanical Engineering, or Software with strong hardware affinity.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="p-2 bg-slate-950 border border-slate-800 rounded text-gold-500 shadow-[inset_0_0_8px_rgba(212,175,55,0.1)]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg></div>
                        <div>
                            <strong class="block text-white mb-1 tracking-wide">Processor Traits</strong>
                            <span class="text-slate-400 leading-relaxed text-sm">Curious, detail-oriented, highly motivated problem solver.</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="md:pl-8 border-t md:border-t-0 md:border-l border-slate-800 pt-8 md:pt-0">
                <h3 class="text-xs font-black text-gold-500 mb-8 tracking-[0.2em] uppercase flex items-center gap-3">
                    <span class="w-4 h-[1px] bg-gold-500"></span> System Upgrades
                </h3>
                <ul class="space-y-6">
                    <li class="flex items-center gap-4 group">
                        <div class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-gold-400 group-hover:shadow-[0_0_8px_#D4AF37] transition-all"></div>
                        <span class="text-slate-300 group-hover:text-white transition-colors text-sm">Real-world engineering exposure</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-gold-400 group-hover:shadow-[0_0_8px_#D4AF37] transition-all"></div>
                        <span class="text-slate-300 group-hover:text-white transition-colors text-sm">Direct mentorship from industry pros</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-gold-400 group-hover:shadow-[0_0_8px_#D4AF37] transition-all"></div>
                        <span class="text-slate-300 group-hover:text-white transition-colors text-sm">Hands-on application beyond theory</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-gold-400 group-hover:shadow-[0_0_8px_#D4AF37] transition-all"></div>
                        <span class="text-slate-300 group-hover:text-white transition-colors text-sm">Accelerated leadership pathways</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 5. Footer / Boot Sequence -->
    <footer class="bg-[#01030a] relative overflow-hidden py-20 px-6 border-t border-slate-900">
        <!-- PCB Pattern Background for Footer -->
        <div class="absolute inset-0 bg-circuit-pattern pointer-events-none mix-blend-screen"></div>
        
        <!-- Large central node -->
        <div class="absolute bottom-[-100px] left-1/2 -translate-x-1/2 w-[400px] h-[400px] border-[1px] border-gold-900/50 rounded-full flex items-center justify-center pointer-events-none opacity-50">
            <div class="w-[300px] h-[300px] border-[1px] border-gold-800/40 rounded-full"></div>
            <div class="absolute w-[1px] h-full bg-gold-900/50"></div>
            <div class="absolute h-[1px] w-full bg-gold-900/50"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10 flex flex-col items-center">
            
            <div class="mb-6">
                <svg class="w-12 h-12 text-gold-500 drop-shadow-[0_0_15px_rgba(212,175,55,0.4)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                </svg>
            </div>

            <h2 class="text-3xl md:text-4xl font-black text-white tracking-[0.2em] mb-4">
                COMPILE YOUR FUTURE.
            </h2>
            <div class="w-32 h-[2px] bg-gradient-to-r from-transparent via-gold-500 to-transparent my-4"></div>
            
            <p class="text-gold-400 tracking-widest text-xs md:text-sm font-bold uppercase font-mono mt-4">
                > Run sequence: Apply -> Build -> Impact
            </p>
            
            <a id="apply" href="mailto:careers@ai2engineering.com" class="mt-12 group relative px-8 py-4 bg-transparent border border-gold-500 text-gold-400 font-bold uppercase tracking-widest overflow-hidden transition-all duration-500 hover:text-black">
                <div class="absolute inset-0 bg-gold-500 translate-y-[100%] group-hover:translate-y-0 transition-transform duration-300 ease-in-out -z-10"></div>
                Initiate Connection
            </a>
            
            <div class="mt-16 flex flex-col items-center gap-2">
                <p class="text-slate-700 text-xs font-mono">SYS.DATE: <?= date('Y-m-d') ?></p>
                <p class="text-slate-700 text-xs font-mono">&copy; AI² Engineering Hardware Division.</p>
            </div>
        </div>
    </footer>

</body>
</html>
