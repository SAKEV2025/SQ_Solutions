<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="SQ Smart Solutions convierte procesos dispersos en control operativo, automatizacion y tableros ejecutivos para tomar mejores decisiones.">
        <meta name="keywords" content="consultoria digital, automatizacion de procesos, tableros ejecutivos, indicadores, operaciones, analitica empresarial">
        <link rel="canonical" href="{{ url('/') }}" />
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">

        <title>SQ Smart Solutions - Control, automatizacion y decision</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800&family=fraunces:500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --page-bg: #f4efe7;
                --page-fg: #0f172a;
                --surface: rgba(255, 255, 255, 0.72);
                --surface-strong: rgba(255, 255, 255, 0.88);
                --surface-muted: rgba(255, 255, 255, 0.55);
                --border-soft: rgba(15, 23, 42, 0.08);
                --border-medium: rgba(15, 23, 42, 0.12);
                --shadow-soft: 0 24px 80px rgba(15, 23, 42, 0.08);
                --text-primary: #0f172a;
                --text-secondary: #475569;
                --text-muted: #94a3b8;
                --accent-primary: #1456b8;
                --accent-secondary: #c08457;
                color-scheme: light;
            }

            html[data-theme="dark"] {
                --page-bg: #0d0221;
                --page-fg: #f0e5ff;
                --surface: rgba(26, 0, 51, 0.72);
                --surface-strong: rgba(26, 0, 51, 0.9);
                --surface-muted: rgba(26, 0, 51, 0.45);
                --border-soft: rgba(0, 245, 255, 0.16);
                --border-medium: rgba(255, 0, 110, 0.24);
                --shadow-soft: 0 24px 80px rgba(13, 2, 33, 0.35);
                --text-primary: #f0e5ff;
                --text-secondary: #e5deff;
                --text-muted: #c9b5ff;
                --accent-primary: #ff006e;
                --accent-secondary: #00f5ff;
                color-scheme: dark;
            }

            * {
                transition: background-color 300ms ease, color 300ms ease, border-color 300ms ease, box-shadow 300ms ease;
            }

            body {
                font-family: 'Manrope', sans-serif;
                background: var(--page-bg);
                color: var(--page-fg);
                transition: background-color 300ms ease, color 300ms ease;
            }

            .font-display {
                font-family: 'Fraunces', serif;
            }

            .text-accent-gradient {
                background: linear-gradient(135deg, #1456b8 0%, #2563eb 50%, #3b82f6 100%);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .glass-panel {
                background: var(--surface);
                backdrop-filter: blur(22px);
                border: 1px solid var(--border-soft);
                box-shadow: var(--shadow-soft);
                transition: background-color 300ms ease, border-color 300ms ease, box-shadow 300ms ease;
            }

            .card-rise {
                transition: transform 240ms ease, box-shadow 240ms ease, border-color 240ms ease, background-color 300ms ease;
            }

            .card-rise:hover {
                transform: translateY(-6px);
                box-shadow: 0 24px 50px rgba(15, 23, 42, 0.12);
            }

            html[data-theme="dark"] .card-rise:hover {
                box-shadow: 0 24px 50px rgba(255, 0, 110, 0.3);
            }

            .reveal {
                opacity: 0;
                transform: translateY(18px);
                transition: opacity 600ms ease, transform 600ms ease;
            }

            .reveal.is-visible {
                opacity: 1;
                transform: translateY(0);
            }

            .mesh {
                background-image: radial-gradient(circle at 1px 1px, rgba(15, 23, 42, 0.08) 1px, transparent 0);
                background-size: 28px 28px;
                transition: background-image 300ms ease;
            }

            html[data-theme="dark"] .mesh {
                background-image: radial-gradient(circle at 1px 1px, rgba(0, 245, 255, 0.12) 1px, transparent 0);
            }

            html[data-theme="dark"] .text-slate-950,
            html[data-theme="dark"] .text-slate-900 {
                color: #f8fafc !important;
                transition: color 300ms ease;
            }

            html[data-theme="dark"] .text-slate-800,
            html[data-theme="dark"] .text-slate-700 {
                color: #e2e8f0 !important;
                transition: color 300ms ease;
            }

            html[data-theme="dark"] .text-slate-600,
            html[data-theme="dark"] .text-slate-500 {
                color: #94a3b8 !important;
                transition: color 300ms ease;
            }

            html[data-theme="dark"] .text-slate-300 {
                color: #cbd5e1 !important;
                transition: color 300ms ease;
            }

            html[data-theme="dark"] nav,
            html[data-theme="dark"] footer,
            html[data-theme="dark"] #contacto {
                background: rgba(26, 0, 51, 0.7) !important;
                border-color: rgba(0, 245, 255, 0.14) !important;
                transition: background-color 300ms ease, border-color 300ms ease;
            }

            html[data-theme="dark"] section,
            html[data-theme="dark"] article,
            html[data-theme="dark"] .glass-panel,
            html[data-theme="dark"] .card-rise,
            html[data-theme="dark"] [class*="bg-white"] {
                background-color: var(--surface-strong) !important;
                border-color: var(--border-soft) !important;
                color: var(--page-fg);
                transition: background-color 300ms ease, border-color 300ms ease, color 300ms ease;
            }

            html[data-theme="dark"] [class*="bg-white/5"] {
                background-color: rgba(26, 0, 51, 0.35) !important;
                transition: background-color 300ms ease;
            }

            html[data-theme="dark"] [class*="bg-white/70"],
            html[data-theme="dark"] [class*="bg-white/75"],
            html[data-theme="dark"] [class*="bg-white/80"],
            html[data-theme="dark"] [class*="bg-white/85"] {
                background-color: rgba(26, 0, 51, 0.78) !important;
                transition: background-color 300ms ease;
            }

            html[data-theme="dark"] [class*="bg-slate-950"] {
                background-color: #0d0221 !important;
                transition: background-color 300ms ease;
            }

            html[data-theme="dark"] [class*="bg-slate-900"] {
                background-color: #1a0033 !important;
                transition: background-color 300ms ease;
            }

            html[data-theme="dark"] [class*="bg-slate-50"],
            html[data-theme="dark"] [class*="bg-blue-50"],
            html[data-theme="dark"] [class*="bg-amber-50"],
            html[data-theme="dark"] [class*="bg-sky-50"] {
                background-color: rgba(26, 0, 51, 0.5) !important;
                transition: background-color 300ms ease;
            }

            /* Animación suave para botones y enlaces */
            button, a {
                transition: background-color 300ms ease, color 300ms ease, border-color 300ms ease, transform 240ms ease;
            }

            /* Iconos del tema */
            #theme-icon-sun,
            #theme-icon-moon {
                transition: opacity 300ms ease, transform 300ms ease;
            }
        </style>
    </head>
    <body class="bg-black text-slate-900 antialiased overflow-x-hidden">
        <div class="fixed inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-br from-[#f8f3ea] via-white to-[#e8efe9]"></div>
            <div class="absolute inset-0 mesh opacity-70"></div>
            <div class="absolute -top-32 right-[-8rem] h-96 w-96 rounded-full bg-blue-200/50 blur-3xl"></div>
            <div class="absolute top-[32rem] left-[-8rem] h-96 w-96 rounded-full bg-blue-200/50 blur-3xl"></div>
            <div class="absolute bottom-[-8rem] right-1/4 h-80 w-80 rounded-full bg-blue-200/40 blur-3xl"></div>
        </div>

        <div class="relative z-10">
            <nav class="sticky top-0 z-50 border-b border-slate-900/5 bg-white/70 backdrop-blur-xl">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-20 items-center justify-between">
                        <a href="{{ url('/') }}" class="flex items-center gap-3">
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-900 shadow-lg shadow-slate-900/15">
                                <img src="{{ asset('landing/sq.png') }}" alt="SQ Smart Solutions Logo" width="40" height="40" class="h-10 w-10 object-contain" loading="eager" decoding="async" />
                            </div>
                            <div>
                                <p class="text-[11px] font-semibold uppercase tracking-[0.35em] text-slate-500">SQ Smart Solutions</p>
                                <p class="font-display text-lg font-semibold text-slate-900">Control que se entiende, resultados que se sienten</p>
                            </div>
                        </a>

                        <div class="hidden items-center gap-2 md:flex">
                            <a href="#propuesta" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-900/5 hover:text-slate-900">Propuesta</a>
                            <a href="#impacto" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-900/5 hover:text-slate-900">Impacto</a>
                            <a href="#metodo" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-900/5 hover:text-slate-900">Metodo</a>
                            <button id="theme-toggle" type="button" class="ml-2 inline-flex items-center gap-2 rounded-full border border-slate-900/10 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:bg-slate-50" aria-label="Cambiar tema">
                                <svg id="theme-icon-sun" class="h-4 w-4 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364 6.364-1.414-1.414M7.05 7.05 5.636 5.636m0 12.728 1.414-1.414M18.364 5.636 16.95 7.05M12 8a4 4 0 100 8 4 4 0 000-8z" /></svg>
                                <svg id="theme-icon-moon" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" /></svg>
                                <span id="theme-toggle-label">Oscuro</span>
                            </button>
                            <a href="#contacto" class="ml-2 rounded-full bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-slate-900/15 transition hover:-translate-y-0.5 hover:bg-slate-800">Agenda una llamada</a>
                        </div>

                        <button id="mobile-menu-button" class="inline-flex items-center justify-center rounded-full border border-slate-900/10 bg-white p-3 text-slate-700 shadow-sm md:hidden" type="button" aria-controls="mobile-menu" aria-expanded="false">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div id="mobile-menu" class="hidden border-t border-slate-900/5 bg-white/95 md:hidden">
                    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6">
                        <div class="grid gap-2">
                            <a href="#propuesta" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-900/5">Propuesta</a>
                            <a href="#impacto" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-900/5">Impacto</a>
                            <a href="#metodo" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-900/5">Metodo</a>
                            <button id="mobile-theme-toggle" type="button" class="rounded-2xl border border-slate-900/10 bg-white px-4 py-3 text-left text-sm font-semibold text-slate-700">Cambiar tema</button>
                            <a href="#contacto" class="rounded-2xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white">Agenda una llamada</a>
                        </div>
                    </div>
                </div>
            </nav>

            <main id="inicio">
                <section class="mx-auto max-w-7xl px-4 pb-16 pt-10 sm:px-6 lg:px-8 lg:pb-24 lg:pt-16">
                    <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
                        <div class="reveal space-y-8">

                            <div class="space-y-5">
                                <h1 class="font-display max-w-3xl text-5xl font-semibold leading-[0.95] tracking-tight text-slate-950 sm:text-6xl lg:text-7xl">
                                    Convierte la operacion en una <span class="text-accent-gradient">ventaja competitiva</span>.
                                </h1>
                                <p class="max-w-2xl text-lg leading-8 text-slate-600 sm:text-xl">
                                    Dise&ntilde;amos experiencias digitales que dan visibilidad, eliminan tareas repetitivas y convierten datos dispersos en decisiones claras para direcci&oacute;n, operaciones y ventas.
                                </p>
                            </div>

                            <div class="flex flex-col gap-4 sm:flex-row">
                                <a href="#contacto" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-7 py-4 text-sm font-semibold text-white shadow-xl shadow-slate-900/15 transition hover:-translate-y-0.5 hover:bg-slate-800">
                                    Quiero una propuesta
                                </a>
                                <a href="#propuesta" class="inline-flex items-center justify-center rounded-full border border-slate-900/10 bg-white px-7 py-4 text-sm font-semibold text-slate-800 transition hover:-translate-y-0.5 hover:border-slate-900/20 hover:bg-slate-50">
                                    Ver el enfoque
                                </a>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-3">
                                <div class="glass-panel rounded-3xl p-5">
                                    <p class="text-sm font-medium text-slate-500">Visibilidad</p>
                                    <p class="mt-2 text-3xl font-semibold text-slate-950">360&deg;</p>
                                    <p class="mt-1 text-sm text-slate-600">Indicadores para dirigir con contexto.</p>
                                </div>
                                <div class="glass-panel rounded-3xl p-5">
                                    <p class="text-sm font-medium text-slate-500">Automatizacion</p>
                                    <p class="mt-2 text-3xl font-semibold text-slate-950">-33%</p>
                                    <p class="mt-1 text-sm text-slate-600">Menos carga operativa manual.</p>
                                </div>
                                <div class="glass-panel rounded-3xl p-5">
                                    <p class="text-sm font-medium text-slate-500">Decision</p>
                                    <p class="mt-2 text-3xl font-semibold text-slate-950">En tiempo real</p>
                                    <p class="mt-1 text-sm text-slate-600">Control de negocio sin esperar reportes tardios.</p>
                                </div>
                            </div>
                        </div>

                        <style>
                            @keyframes bounce-scale {
                                0% {
                                    opacity: 0;
                                    transform: translateY(-80px) scale(0.7) rotateY(25deg);
                                }
                                40% {
                                    opacity: 1;
                                    transform: translateY(0) scale(1.08) rotateY(0deg);
                                }
                                65% {
                                    transform: translateY(-15px) scale(1.02) rotateY(-5deg);
                                }
                                85% {
                                    transform: translateY(0) scale(1.01) rotateY(0deg);
                                }
                                100% {
                                    opacity: 1;
                                    transform: translateY(0) scale(1) rotateY(0deg);
                                }
                            }



                            .carousel-slide.bounce img {
                                animation: bounce-scale 1.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                            }
                        </style>

                        <div class="relative lg:pl-8">
                            <div class="relative">
                                <!-- Glow effect -->
                                <div class="absolute"></div>
                                
                                <!-- Main carousel -->
                                <div class="relative">
                                    <div id="carousel-main" class="relative w-full max-w-2xl mx-auto h-96">
                                        <!-- Carrusel de imágenes -->
                                        <div class="carousel-container relative w-full h-full">
                                            <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out" style="opacity: 1;">
                                                <img src="{{ asset('Carrusel_index/WhatsApp Image 2026-03-30 at 4.00.14 PM.jpeg') }}" class="w-full h-full object-contain bounce" alt="Carrusel Imagen 1" loading="lazy" />
                                            </div>
                                            <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out" style="opacity: 0;">
                                                <img src="{{ asset('Carrusel_index/WhatsApp Image 2026-03-30 at 4.00.14 PM (1).jpeg') }}" class="w-full h-full object-contain" alt="Carrusel Imagen 2" loading="lazy" />
                                            </div>
                                            <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out" style="opacity: 0;">
                                                <img src="{{ asset('Carrusel_index/WhatsApp Image 2026-03-30 at 4.00.14 PM (2).jpeg') }}" class="w-full h-full object-contain" alt="Carrusel Imagen 3" loading="lazy" />
                                            </div>
                                        </div>
                                        <!-- Overlay gradient -->
                                        <div class="absolute inset-0 rounded-2xl"></div>

                                        <!-- Indicadores de posición -->
                                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-10 flex gap-2">
                                            <button class="carousel-indicator h-2 w-2 rounded-full bg-white/60 transition" style="width: 24px; background-color: rgba(255, 255, 255, 0.9);" data-index="0"></button>
                                            <button class="carousel-indicator h-2 w-2 rounded-full bg-white/60 transition" data-index="1"></button>
                                            <button class="carousel-indicator h-2 w-2 rounded-full bg-white/60 transition" data-index="2"></button>
                                        </div>
                                    </div>

                                    <!-- Floating elements -->
                                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-500/20 rounded-full blur-xl animate-pulse"></div>
                                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-500/20 rounded-full blur-xl animate-pulse" style="animation-delay: 1s;"></div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Carrusel de imágenes con animación de rebote
                            let currentSlide = 0;
                            const slides = document.querySelectorAll('.carousel-slide');
                            const indicators = document.querySelectorAll('.carousel-indicator');
                            const carouselContainer = document.querySelector('.carousel-container');
                            const totalSlides = slides.length;

                            function showSlide(index) {
                                slides.forEach((slide, i) => {
                                    const isActive = i === index;
                                    slide.style.opacity = isActive ? '1' : '0';
                                    
                                    // Agregar clase bounce cuando es visible
                                    const img = slide.querySelector('img');
                                    if (img) {
                                        if (isActive) {
                                            img.classList.remove('bounce');
                                            void img.offsetWidth; // Trigger reflow
                                            img.classList.add('bounce');
                                        } else {
                                            img.classList.remove('bounce');
                                        }
                                    }
                                });
                                
                                indicators.forEach((btn, i) => {
                                    if (i === index) {
                                        btn.style.width = '24px';
                                        btn.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
                                    } else {
                                        btn.style.width = '8px';
                                        btn.style.backgroundColor = 'rgba(255, 255, 255, 0.6)';
                                    }
                                });
                            }

                            function nextSlide() {
                                currentSlide = (currentSlide + 1) % totalSlides;
                                showSlide(currentSlide);
                            }

                            // Click en la imagen para cambiar
                            carouselContainer.addEventListener('click', nextSlide);

                            // Indicadores
                            indicators.forEach(btn => {
                                btn.addEventListener('click', (e) => {
                                    e.stopPropagation();
                                    currentSlide = parseInt(e.target.dataset.index);
                                    showSlide(currentSlide);
                                });
                            });

                            // Auto-rotate cada 5 segundos
                            setInterval(nextSlide, 5000);
                        </script>
                    </div>
                </section>

                <section id="propuesta" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="reveal mb-12 max-w-3xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-700">Propuesta de valor</p>
                        <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Una capa de claridad sobre la operacion real del negocio.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">La pagina deja de hablar de herramientas y empieza a mostrar resultados. El mensaje central es simple: menos friccion, mas control, mejor decision.</p>
                    </div>

                    <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-900 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Direccion visible</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Tableros y reportes que muestran el estado del negocio en una sola lectura.</p>
                        </article>

                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-600 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m4-4H8" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Automatizacion util</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Flujos que eliminan captura repetitiva, errores y tiempos muertos.</p>
                        </article>

                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-500 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 1.34-4 3s1.79 3 4 3 4 1.34 4 3-1.79 3-4 3m0-14v14" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Valor financiero</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">La narrativa visual se enfoca en ahorro, productividad y conversion, no en buzzwords.</p>
                        </article>

                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-600 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Escala ordenada</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Soluciones disenadas para crecer con la operacion y no romper procesos existentes.</p>
                        </article>
                    </div>
                </section>

                <section id="impacto" class="bg-slate-950 py-16 text-white lg:py-24">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                            <div class="reveal space-y-5">
                                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">Impacto esperado</p>
                                <h2 class="font-display text-4xl font-semibold tracking-tight sm:text-5xl">No vendemos tecnologia aislada. Dise&ntilde;amos una operacion mas rentable.</h2>
                                <p class="max-w-xl text-lg leading-8 text-slate-300">El foco del redise&ntilde;o es que el usuario entienda en segundos por que SQ Smart Solutions importa: orden, velocidad, trazabilidad y decisiones con sustento.</p>
                            </div>

                            <div class="grid gap-5 sm:grid-cols-2">
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Procesos con friccion</p>
                                    <p class="mt-3 text-4xl font-semibold">1 sola vista</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Información operativa, comercial y directiva consolidada.</p>
                                </div>
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Reportes lentos</p>
                                    <p class="mt-3 text-4xl font-semibold">Tiempo real</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Indicadores listos para actuar, no solo para documentar.</p>
                                </div>
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Tareas repetitivas</p>
                                    <p class="mt-3 text-4xl font-semibold">Menos carga</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Automatizaciones que liberan tiempo del equipo.</p>
                                </div>
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Decision intuitiva</p>
                                    <p class="mt-3 text-4xl font-semibold">Mas claridad</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Cada accion acompa&ntilde;ada de contexto y prioridad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="metodo" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="reveal mb-12 max-w-3xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-700">Metodo</p>
                        <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Un proceso sencillo, consultivo y orientado a adopcion real.</h2>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-4">
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">01</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Diagnostico</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Identificamos procesos, cuellos de botella y decisiones que hoy dependen de demasiada friccion.</p>
                        </div>
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">02</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Arquitectura</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Definimos una experiencia de uso clara para negocio, sin complejidad innecesaria.</p>
                        </div>
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">03</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Implementacion</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Construimos tableros, flujos y herramientas listas para operar.</p>
                        </div>
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">04</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Adopcion</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Acompa&ntilde;amos el uso para que el cambio se sostenga en el tiempo.</p>
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-stretch">
                        <div class="reveal rounded-[2rem] bg-slate-900 p-8 text-white lg:p-10">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">Sectores que encajan</p>
                            <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">Donde hay operacion, hay oportunidad de ordenar y crecer.</h2>
                            <p class="mt-4 max-w-xl text-lg leading-8 text-slate-300">La propuesta se adapta naturalmente a empresas con venta, seguimiento, aprobaciones, registros o indicadores que hoy viven dispersos en hojas, correos y sistemas inconexos.</p>
                            <div class="mt-8 flex flex-wrap gap-3">
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Servicios</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Distribucion</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Retail</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Manufactura</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Construccion</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Comercial</span>
                            </div>
                        </div>

                        <div class="reveal grid gap-5 sm:grid-cols-2">
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-indigo-700">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Reducir caos operativo</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Eliminar retrabajo, duplicidad y seguimiento manual.</p>
                            </div>
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-amber-700">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Ver antes de reaccionar</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Anticipar desvio, atrasos y oportunidades.</p>
                            </div>
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-700">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Unificar informacion</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Una sola fuente para operacion, direccion y comercial.</p>
                            </div>
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Escalar sin desorden</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Crecimiento con estructura, no con parches.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contacto" class="border-t border-slate-900/5 bg-white/70 py-16 lg:py-24">
                    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                        <div class="reveal rounded-[2rem] bg-slate-950 p-8 text-white shadow-2xl shadow-slate-950/20 lg:p-12">
                            <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                                <div>
                                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-300">Contacto</p>
                                    <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">Si el negocio necesita claridad, la pagina debe demostrarla desde el primer vistazo.</h2>
                                    <p class="mt-4 max-w-2xl text-lg leading-8 text-slate-300">Esta propuesta ya no se presenta como un catalogo tecnico. Se presenta como una solucion de negocio con foco en control, velocidad y crecimiento ordenado.</p>
                                </div>

                                <div class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-300">Canales de contacto</p>
                                    <div class="mt-5 grid gap-3">
                                        <a href="mailto:contacto@sqsmartsolutions.com" class="rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">contacto@sqsmartsolutions.com</a>
                                        <a href="https://wa.me/5215536799199" target="_blank" class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-semibold text-white transition hover:bg-white/10">WhatsApp comercial</a>
                                        <a href="{{ url('/contacto') }}" class="rounded-2xl bg-indigo-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400">Abrir formulario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="border-t border-slate-900/5 bg-white/60">
                <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-8 text-sm text-slate-500 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                    <p>© 2026 SQ Smart Solutions. Todos los derechos reservados.</p>
                    <p>Control, automatizacion y decision para empresas que necesitan orden y visibilidad.</p>
                </div>
            </footer>
        </div>

        <script>
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const themeToggle = document.getElementById('theme-toggle');
            const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
            const themeLabel = document.getElementById('theme-toggle-label');
            const themeIconSun = document.getElementById('theme-icon-sun');
            const themeIconMoon = document.getElementById('theme-icon-moon');

            const applyTheme = (theme) => {
                const isDark = theme === 'dark';
                
                // Actualizar el atributo de tema
                document.documentElement.dataset.theme = theme;

                // Actualizar etiqueta
                if (themeLabel) {
                    themeLabel.textContent = isDark ? 'Claro' : 'Oscuro';
                }

                // Animar iconos con rotación suave
                if (themeIconSun && themeIconMoon) {
                    themeIconSun.style.transform = isDark ? 'rotate(180deg)' : 'rotate(0deg)';
                    themeIconMoon.style.transform = isDark ? 'rotate(0deg)' : 'rotate(180deg)';
                    themeIconSun.classList.toggle('hidden', !isDark);
                    themeIconMoon.classList.toggle('hidden', isDark);
                }

                // Actualizar botón móvil
                if (mobileThemeToggle) {
                    mobileThemeToggle.textContent = isDark ? 'Cambiar a claro' : 'Cambiar a oscuro';
                }

                // Guardar preferencia
                localStorage.setItem('sq-theme', theme);
                
                // Disparar evento personalizado
                window.dispatchEvent(new CustomEvent('themechange', { detail: { theme } }));
            };

            // Aplicar tema guardado o preferencia del sistema
            const savedTheme = localStorage.getItem('sq-theme');
            const preferredTheme = savedTheme ?? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            applyTheme(preferredTheme);

            // Escuchar cambios en las preferencias del sistema
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                if (!localStorage.getItem('sq-theme')) {
                    applyTheme(e.matches ? 'dark' : 'light');
                }
            });

            // Toggle de tema en escritorio
            themeToggle?.addEventListener('click', () => {
                const currentTheme = document.documentElement.dataset.theme;
                applyTheme(currentTheme === 'dark' ? 'light' : 'dark');
            });

            // Toggle de tema en móvil
            mobileThemeToggle?.addEventListener('click', () => {
                const currentTheme = document.documentElement.dataset.theme;
                applyTheme(currentTheme === 'dark' ? 'light' : 'dark');
            });

            // Menú móvil
            mobileMenuButton?.addEventListener('click', function () {
                const isHidden = mobileMenu.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', String(!isHidden));
            });

            // Scroll suave a secciones
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener('click', function (event) {
                    const href = this.getAttribute('href');
                    const target = href ? document.querySelector(href) : null;

                    if (!target) {
                        return;
                    }

                    event.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });

                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        mobileMenuButton?.setAttribute('aria-expanded', 'false');
                    }
                });
            });

            // Observador para animaciones de reveal
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

            document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));
        </script>
    </body>
</html>