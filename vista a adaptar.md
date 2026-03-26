

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="SQ Smart Solutions - Especialistas en desarrollo de aplicaciones web, dashboards, análisis de KPIs y soluciones digitales empresariales">
        <meta name="keywords" content="desarrollo web, dashboards, KPIs, Power BI, Looker Studio, SQL, AppSheet">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url('/') }}" />
        
        <!-- Force no cache for CSS on mobile -->
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">

        <title>SQ Smart Solutions - Soluciones Digitales Inteligentes</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=space-grotesk:400,500,600,700" rel="stylesheet" />

        
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .gradient-text {
                background: linear-gradient(135deg, #60A5FA 0%, #3B82F6 50%, #1D4ED8 100%);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            
            .hero-gradient {
                background: linear-gradient(135deg, 
                    rgba(15, 23, 42, 0.95) 0%, 
                    rgba(30, 41, 59, 0.92) 25%,
                    rgba(51, 65, 85, 0.90) 50%,
                    rgba(30, 41, 59, 0.92) 75%,
                    rgba(15, 23, 42, 0.95) 100%);
            }
            
            .card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .card-hover:hover {
                transform: translateY(-8px) scale(1.02);
            }
            
            .floating-animation {
                animation: float 6s ease-in-out infinite;
            }
            
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(-5deg); }
                50% { transform: translateY(-20px) rotate(-5deg); }
            }
            
            .pulse-glow {
                animation: pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            }
            
            @keyframes pulse-glow {
                0%, 100% {
                    box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
                }
                50% {
                    box-shadow: 0 0 40px rgba(59, 130, 246, 0.8);
                }
            }
        </style>
    </head>
    <body class="font-inter antialiased bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 min-h-screen overflow-x-hidden">
        <!-- Background Pattern -->
        <div class="fixed inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20" style="background-image: url('technology-785742_1920.jpg')"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900/80 via-blue-900/70 to-slate-900/90"></div>
            <!-- Animated background elements -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500/10 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-40 right-10 w-96 h-96 bg-indigo-500/10 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-700"></div>
            <div class="absolute -bottom-32 left-20 w-80 h-80 bg-purple-500/10 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"></div>
        </div>

        <div class="relative z-10">
            <!-- Navigation -->
            <nav class="sticky top-0 z-50 backdrop-blur-md bg-slate-900/80 border-b border-slate-700/50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                            <div class="relative">
                                <img 
                                    src="{{ asset('logo.png') }}" 
                                    alt="SQ Smart Solutions Logo" 
                                    width="40" 
                                    height="40" 
                                    class="h-10 w-10 object-contain drop-shadow-md" 
                                    loading="lazy" 
                                    decoding="async"
                                />
                                <div class="absolute -inset-2 bg-blue-400/20 rounded-full blur group-hover:bg-blue-300/30 transition-colors duration-300"></div>
                            </div>
                            <div>
                                <h1 class="font-space-grotesk text-xl font-bold text-white group-hover:text-blue-100 transition-colors duration-300">SQ SMART</h1>
                                <p class="text-xs text-blue-300 font-medium">SOLUTIONS</p>
                            </div>
                        </a>

                        <!-- Desktop Navigation -->
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-8">
                                <a href="{{ url('/') }}" class="text-slate-300 hover:text-white hover:bg-blue-600/20 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">Inicio</a>
                                <a href="{{ url('/#servicios') }}" class="text-slate-300 hover:text-white hover:bg-blue-600/20 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">Servicios</a>
                                <a href="{{ url('/#portafolio') }}" class="text-slate-300 hover:text-white hover:bg-blue-600/20 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">Portafolio</a>
                                <a href="{{ url('/contacto') }}" class="bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">Contacto</a>
                            </div>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="md:hidden">
                            <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700 transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div id="mobile-menu" class="md:hidden hidden bg-slate-800/95 backdrop-blur-md border-t border-slate-700/50">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="{{ url('/') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-white hover:bg-blue-600/20 transition-all duration-300">Inicio</a>
                        <a href="{{ url('/#servicios') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-white hover:bg-blue-600/20 transition-all duration-300">Servicios</a>
                        <a href="{{ url('/#portafolio') }}" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-300 hover:text-white hover:bg-blue-600/20 transition-all duration-300">Portafolio</a>
                        <a href="{{ url('/contacto') }}" class="block px-3 py-2 rounded-lg text-base font-medium bg-gradient-to-r from-blue-600 to-blue-500 text-white transition-all duration-300 mx-3 text-center">Contacto</a>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <main id="inicio">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
                    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                        <!-- Content -->
                        <div class="space-y-8 lg:pr-8">
                            <div class="space-y-6">
                                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-500/10 border border-blue-400/20">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse mr-2"></div>
                                    <span class="text-blue-300 text-sm font-medium">Transformación Digital Empresarial</span>
                                </div>
                                
                                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-space-grotesk font-bold leading-tight">
                                    <span class="text-white">Soluciones </span>
                                    <span class="gradient-text">Inteligentes</span>
                                    <br>
                                    <span class="text-white">para tu </span>
                                    <span class="gradient-text">Empresa</span>
                                </h1>
                                
                                <p class="text-xl text-slate-300 leading-relaxed max-w-2xl">
                                    Potenciamos tu negocio con <span class="text-blue-400 font-semibold">dashboards interactivos</span>, 
                                    <span class="text-blue-400 font-semibold">análisis de KPIs</span> y 
                                    <span class="text-blue-400 font-semibold">aplicaciones web</span> personalizadas 
                                    que impulsan la toma de decisiones estratégicas.
                                </p>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="#servicios" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <span class="relative z-10">Conocer Servicios</span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-400 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </a>
                                <a href="{{ url('/contacto') }}" class="px-8 py-4 border-2 border-blue-400/50 text-blue-100 font-semibold rounded-xl hover:bg-blue-400/10 hover:border-blue-400 transform hover:-translate-y-1 transition-all duration-300">
                                    Consulta Gratuita
                                </a>
                            </div>

                            <!-- Tech Stack -->
                            <div class="space-y-4">
                                <p class="text-sm text-slate-400 font-medium">Tecnologías que dominamos:</p>
                                <div class="flex flex-wrap gap-3">
                                    <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-sm font-medium rounded-full border border-blue-500/20">Power BI</span>
                                    <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-sm font-medium rounded-full border border-blue-500/20">Looker Studio</span>
                                    <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-sm font-medium rounded-full border border-blue-500/20">SQL</span>
                                    <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-sm font-medium rounded-full border border-blue-500/20">AppSheet</span>
                                    <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-sm font-medium rounded-full border border-blue-500/20">Laravel</span>
                                    <span class="px-3 py-1 bg-blue-500/10 text-blue-300 text-sm font-medium rounded-full border border-blue-500/20">React</span>
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Image -->
                        <div class="relative lg:pl-8">
                            <div class="relative">
                                <!-- Glow effect -->
                                <div class="absolute -inset-4 bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-3xl blur-2xl"></div>
                                
                                <!-- Main image -->
                                <div class="relative">
                                    <img 
                                        src="dashboard2.png" 
                                        alt="Dashboard Analytics Preview" 
                                        class="w-full max-w-2xl mx-auto rounded-2xl shadow-2xl border border-slate-700/50 floating-animation"
                                    >
                                    <!-- Overlay gradient -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent rounded-2xl"></div>
                                </div>

                                <!-- Floating elements -->
                                <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-500/20 rounded-full blur-xl animate-pulse"></div>
                                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-500/20 rounded-full blur-xl animate-pulse delay-1000"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Services Section -->
            <section id="servicios" class="py-20 bg-gradient-to-b from-transparent to-slate-800/50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center space-y-6 mb-16">
                        <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-500/10 border border-blue-400/20">
                            <span class="text-blue-300 text-sm font-medium">Nuestros Servicios</span>
                        </div>
                        
                        <h2 class="text-4xl lg:text-5xl font-space-grotesk font-bold text-white">
                            Soluciones que <span class="gradient-text">Transforman</span>
                        </h2>
                        
                        <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                            Desde análisis de datos hasta desarrollo de aplicaciones completas, 
                            ofrecemos soluciones integrales para potenciar tu negocio.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Dashboard & Analytics -->
                        <div class="group relative card-hover">
                            <div class="relative p-8 bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-xl">
                                <!-- Icon -->
                                <div class="relative mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                        </svg>
                                    </div>
                                    <div class="absolute -inset-2 bg-blue-500/20 rounded-2xl blur group-hover:bg-blue-400/30 transition-colors duration-300"></div>
                                </div>
                                
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-blue-100 transition-colors duration-300">
                                    Dashboards & Analytics
                                </h3>
                                
                                <p class="text-slate-300 mb-6 leading-relaxed">
                                    Transformamos tus datos en insights actionables con dashboards interactivos en Power BI y Looker Studio que facilitan la toma de decisiones estratégicas.
                                </p>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs font-medium rounded-md">Power BI</span>
                                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs font-medium rounded-md">Looker Studio</span>
                                    <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs font-medium rounded-md">KPIs</span>
                                </div>
                                
                                <!-- Hover border effect -->
                                <div class="absolute inset-0 rounded-2xl border-2 border-blue-400/0 group-hover:border-blue-400/50 transition-colors duration-300"></div>
                            </div>
                        </div>

                        <!-- Web Development -->
                        <div class="group relative card-hover">
                            <div class="relative p-8 bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-xl">
                                <div class="relative mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                        </svg>
                                    </div>
                                    <div class="absolute -inset-2 bg-indigo-500/20 rounded-2xl blur group-hover:bg-indigo-400/30 transition-colors duration-300"></div>
                                </div>
                                
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-indigo-100 transition-colors duration-300">
                                    Desarrollo Web
                                </h3>
                                
                                <p class="text-slate-300 mb-6 leading-relaxed">
                                    Creamos aplicaciones web modernas, landing pages y sistemas empresariales utilizando las últimas tecnologías y mejores prácticas de desarrollo.
                                </p>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-indigo-500/20 text-indigo-300 text-xs font-medium rounded-md">Laravel</span>
                                    <span class="px-2 py-1 bg-indigo-500/20 text-indigo-300 text-xs font-medium rounded-md">React</span>
                                    <span class="px-2 py-1 bg-indigo-500/20 text-indigo-300 text-xs font-medium rounded-md">Tailwind CSS</span>
                                </div>
                                
                                <div class="absolute inset-0 rounded-2xl border-2 border-indigo-400/0 group-hover:border-indigo-400/50 transition-colors duration-300"></div>
                            </div>
                        </div>

                        <!-- Database & Optimization -->
                        <div class="group relative card-hover">
                            <div class="relative p-8 bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-xl">
                                <div class="relative mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                                        </svg>
                                    </div>
                                    <div class="absolute -inset-2 bg-emerald-500/20 rounded-2xl blur group-hover:bg-emerald-400/30 transition-colors duration-300"></div>
                                </div>
                                
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-emerald-100 transition-colors duration-300">
                                    Base de Datos & SQL
                                </h3>
                                
                                <p class="text-slate-300 mb-6 leading-relaxed">
                                    Optimizamos y estructuramos tus bases de datos para máximo rendimiento, creando consultas SQL eficientes y arquitecturas escalables.
                                </p>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-medium rounded-md">SQL Server</span>
                                    <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-medium rounded-md">MySQL</span>
                                    <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-medium rounded-md">PostgreSQL</span>
                                </div>
                                
                                <div class="absolute inset-0 rounded-2xl border-2 border-emerald-400/0 group-hover:border-emerald-400/50 transition-colors duration-300"></div>
                            </div>
                        </div>

                        <!-- AppSheet Solutions -->
                        <div class="group relative card-hover">
                            <div class="relative p-8 bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-xl">
                                <div class="relative mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="absolute -inset-2 bg-orange-500/20 rounded-2xl blur group-hover:bg-orange-400/30 transition-colors duration-300"></div>
                                </div>
                                
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-orange-100 transition-colors duration-300">
                                    Apps Móviles AppSheet
                                </h3>
                                
                                <p class="text-slate-300 mb-6 leading-relaxed">
                                    Desarrollamos aplicaciones móviles empresariales sin código usando AppSheet, perfectas para automatizar procesos y mejorar la productividad.
                                </p>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs font-medium rounded-md">AppSheet</span>
                                    <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs font-medium rounded-md">Google Sheets</span>
                                    <span class="px-2 py-1 bg-orange-500/20 text-orange-300 text-xs font-medium rounded-md">Workflow</span>
                                </div>
                                
                                <div class="absolute inset-0 rounded-2xl border-2 border-orange-400/0 group-hover:border-orange-400/50 transition-colors duration-300"></div>
                            </div>
                        </div>

                        <!-- Business Intelligence -->
                        <div class="group relative card-hover">
                            <div class="relative p-8 bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-xl">
                                <div class="relative mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-violet-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                        </svg>
                                    </div>
                                    <div class="absolute -inset-2 bg-violet-500/20 rounded-2xl blur group-hover:bg-violet-400/30 transition-colors duration-300"></div>
                                </div>
                                
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-violet-100 transition-colors duration-300">
                                    Business Intelligence
                                </h3>
                                
                                <p class="text-slate-300 mb-6 leading-relaxed">
                                    Implementamos soluciones de inteligencia empresarial que convierten datos complejos en información estratégica para la toma de decisiones.
                                </p>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-violet-500/20 text-violet-300 text-xs font-medium rounded-md">ETL</span>
                                    <span class="px-2 py-1 bg-violet-500/20 text-violet-300 text-xs font-medium rounded-md">Data Warehouse</span>
                                    <span class="px-2 py-1 bg-violet-500/20 text-violet-300 text-xs font-medium rounded-md">Reporting</span>
                                </div>
                                
                                <div class="absolute inset-0 rounded-2xl border-2 border-violet-400/0 group-hover:border-violet-400/50 transition-colors duration-300"></div>
                            </div>
                        </div>

                        <!-- Consulting -->
                        <div class="group relative card-hover">
                            <div class="relative p-8 bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-xl">
                                <div class="relative mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div class="absolute -inset-2 bg-cyan-500/20 rounded-2xl blur group-hover:bg-cyan-400/30 transition-colors duration-300"></div>
                                </div>
                                
                                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-cyan-100 transition-colors duration-300">
                                    Consultoría Digital
                                </h3>
                                
                                <p class="text-slate-300 mb-6 leading-relaxed">
                                    Asesoramos tu empresa en la transformación digital, identificando oportunidades y creando estrategias tecnológicas personalizadas.
                                </p>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs font-medium rounded-md">Estrategia</span>
                                    <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs font-medium rounded-md">Procesos</span>
                                    <span class="px-2 py-1 bg-cyan-500/20 text-cyan-300 text-xs font-medium rounded-md">Optimización</span>
                                </div>
                                
                                <div class="absolute inset-0 rounded-2xl border-2 border-cyan-400/0 group-hover:border-cyan-400/50 transition-colors duration-300"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section id="contacto" class="py-20 bg-gradient-to-b from-slate-800/50 to-slate-900/80">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h2 class="text-4xl lg:text-5xl font-space-grotesk font-bold text-white">
                                ¿Listo para <span class="gradient-text">Transformar</span> tu Negocio?
                            </h2>
                            <p class="text-xl text-slate-300 max-w-2xl mx-auto">
                                Agenda una consulta gratuita y descubre cómo nuestras soluciones pueden 
                                potenciar tu empresa hacia el siguiente nivel.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                            <a href="mailto:contacto@sqsmartsolutions.com" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                <span class="relative z-10 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    Contactar Ahora
                                </span>
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-400 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>

                            <div class="flex items-center gap-4 text-slate-300">
                                <span>o escríbenos por</span>
                                <a href="https://wa.me/5215536799199" target="_blank" class="flex items-center gap-2 text-green-400 hover:text-green-300 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.520-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                    WhatsApp
                                </a>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 pt-12 border-t border-slate-700/50">
                            <div class="space-y-2">
                                <div class="text-3xl font-bold text-blue-400">50+</div>
                                <div class="text-sm text-slate-400">Proyectos Completados</div>
                            </div>
                            <div class="space-y-2">
                                <div class="text-3xl font-bold text-blue-400">100%</div>
                                <div class="text-sm text-slate-400">Satisfacción Cliente</div>
                            </div>
                            <div class="space-y-2">
                                <div class="text-3xl font-bold text-blue-400">24/7</div>
                                <div class="text-sm text-slate-400">Soporte Técnico</div>
                            </div>
                            <div class="space-y-2">
                                <div class="text-3xl font-bold text-blue-400">5★</div>
                                <div class="text-sm text-slate-400">Calificación Promedio</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="bg-slate-900/90 border-t border-slate-700/50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="flex items-center space-x-3 mb-4 md:mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="text-blue-400" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                            </svg>
                            <div>
                                <h3 class="font-space-grotesk font-bold text-white">SQ Smart Solutions</h3>
                                <p class="text-xs text-slate-400">Soluciones Digitales Inteligentes</p>
                            </div>
                        </div>
                        
                        <div class="text-center md:text-right">
                            <p class="text-slate-400 text-sm">© 2025 SQ Smart Solutions. Todos los derechos reservados.</p>
                            <p class="text-slate-500 text-xs mt-1">Transformando empresas a través de la tecnología</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            // Mobile menu toggle
            document.getElementById('mobile-menu-button').addEventListener('click', function () {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        
                        // Close mobile menu if open
                        const mobileMenu = document.getElementById('mobile-menu');
                        if (!mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                        }
                    }
                });
            });

            // Add scroll-based animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);

            // Observe elements for animations
            document.querySelectorAll('.card-hover').forEach(el => {
                observer.observe(el);
            });
        </script>

    </body>
</html>