<!DOCTYPE html>
<html lang="es-MX" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="@yield('description', 'SAKEV Solutions: aplicaciones web, automatización y datos para organizar el trabajo de tu empresa.')">
        
        <link rel="canonical" href="{{ url()->current() }}" />

        <title>@yield('title', 'SAKEV Solutions | Software, automatización y datos')</title>
        <meta property="og:type" content="website">
        <meta property="og:locale" content="es_MX">
        <meta property="og:site_name" content="SAKEV Solutions">
        <meta property="og:title" content="@yield('title', 'SAKEV Solutions | Software, automatización y datos')">
        <meta property="og:description" content="@yield('description', 'Aplicaciones web, automatización y datos para organizar el trabajo de tu empresa.')">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('landing/LOGO_SAKEV.png') }}">
        <meta property="og:image:alt" content="Símbolo de SAKEV Solutions">
        <meta name="twitter:card" content="summary">
        <link rel="icon" type="image/webp" href="{{ asset('landing/logo-symbol.webp') }}">
        <script src="{{ asset('landing/theme.js') }}"></script>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800&family=fraunces:500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --page-bg: #fbf9fd;
                --page-fg: #160f24;
                --surface: rgba(255, 255, 255, 0.82);
                --surface-strong: #ffffff;
                --surface-muted: rgba(255, 255, 255, 0.65);
                --border-soft: #ede4f5;
                --border-medium: #dfd0ec;
                --shadow-soft: 0 24px 80px rgba(121, 40, 202, 0.07);
                --text-primary: #160f24;
                --text-secondary: #5b4e72;
                --text-muted: #8c7fa3;
                --accent-primary: #7928ca;
                --accent-secondary: #ff6b35;
                --brand-gold: #fbb034;
                --brand-orange: #ff6b35;
                --brand-magenta: #d926a9;
                --brand-violet: #7928ca;
                --btn-primary-bg: #160f24;
                --btn-primary-hover: #291b43;
                color-scheme: light;
            }

            html[data-theme="dark"] {
                --page-bg: #0e0918;
                --page-fg: #f5f0fa;
                --surface: #181126;
                --surface-strong: #201633;
                --surface-muted: #130c21;
                --border-soft: #2f1d47;
                --border-medium: #492b6e;
                --shadow-soft: 0 24px 80px #06030c;
                --text-primary: #ffffff;
                --text-secondary: #cbbcd9;
                --text-muted: #8b79a0;
                --accent-primary: #fbb034;
                --accent-secondary: #ff6b35;
                --brand-gold: #fbb034;
                --brand-orange: #ff6b35;
                --brand-magenta: #d926a9;
                --brand-violet: #7928ca;
                --btn-primary-bg: #7928ca;
                --btn-primary-hover: #903fe6;
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
                background: linear-gradient(135deg, #fbb034 0%, #ff6b35 30%, #d926a9 70%, #7928ca 100%);
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
                box-shadow: 0 24px 50px rgba(121, 40, 202, 0.12);
            }

            html[data-theme="dark"] .card-rise:hover {
                box-shadow: 0 24px 50px #06030c;
                border-color: #492b6e;
            }

            .reveal { opacity: 1; }

            .mesh {
                background-image: radial-gradient(circle at 1px 1px, rgba(121, 40, 202, 0.08) 1px, transparent 0);
                background-size: 28px 28px;
                transition: background-image 300ms ease;
            }

            html[data-theme="dark"] .mesh {
                background-image: radial-gradient(circle at 1px 1px, #2f1d47 1px, transparent 0);
            }

            html[data-theme="dark"] .text-slate-950,
            html[data-theme="dark"] .text-slate-900 {
                color: #ffffff !important;
            }

            html[data-theme="dark"] .text-slate-800,
            html[data-theme="dark"] .text-slate-700 {
                color: #f5f0fa !important;
            }

            html[data-theme="dark"] .text-slate-600,
            html[data-theme="dark"] .text-slate-500 {
                color: #cbbcd9 !important;
            }

            html[data-theme="dark"] .text-slate-300 {
                color: #cbbcd9 !important;
            }

            html[data-theme="dark"] nav,
            html[data-theme="dark"] footer,
            html[data-theme="dark"] #contacto {
                background: #181126 !important;
                border-color: #2f1d47 !important;
            }

            html[data-theme="dark"] section,
            html[data-theme="dark"] article,
            html[data-theme="dark"] .glass-panel,
            html[data-theme="dark"] .card-rise,
            html[data-theme="dark"] [class*="bg-white"] {
                background-color: #181126 !important;
                border-color: #2f1d47 !important;
                color: var(--page-fg);
            }

            html[data-theme="dark"] [class*="bg-white/5"] {
                background-color: #201633 !important;
            }

            html[data-theme="dark"] [class*="bg-white/60"],
            html[data-theme="dark"] [class*="bg-white/70"],
            html[data-theme="dark"] [class*="bg-white/75"],
            html[data-theme="dark"] [class*="bg-white/80"],
            html[data-theme="dark"] [class*="bg-white/85"],
            html[data-theme="dark"] [class*="bg-white/95"] {
                background-color: #181126 !important;
            }

            html[data-theme="dark"] [class*="bg-slate-950"] {
                background-color: #0e0918 !important;
            }

            html[data-theme="dark"] [class*="bg-slate-900"] {
                background-color: #181126 !important;
            }

            html[data-theme="dark"] [class*="bg-slate-50"],
            html[data-theme="dark"] [class*="bg-blue-50"],
            html[data-theme="dark"] [class*="bg-amber-50"],
            html[data-theme="dark"] [class*="bg-sky-50"] {
                background-color: #181126 !important;
            }

            /* Buttons and action links use primary color in dark mode */
            html[data-theme="dark"] a.bg-slate-900,
            html[data-theme="dark"] button.bg-slate-900 {
                background-color: #7928ca !important;
                color: #ffffff !important;
            }

            html[data-theme="dark"] a.hover\:bg-slate-800:hover,
            html[data-theme="dark"] button.hover\:bg-slate-800:hover {
                background-color: #903fe6 !important;
            }

            /* Theme toggle and mobile menu button */
            html[data-theme="dark"] #theme-toggle,
            html[data-theme="dark"] #mobile-menu-button {
                background-color: #201633 !important;
                border-color: #492b6e !important;
                color: #f5f0fa !important;
            }

            html[data-theme="dark"] #theme-toggle:hover {
                background-color: #2f1d47 !important;
            }

            /* Page background elements in dark mode */
            html[data-theme="dark"] #page-bg {
                background: #0e0918 !important;
            }

            html[data-theme="dark"] .bg-glow {
                background-color: #7928ca !important;
                opacity: 0.18;
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
            [hidden] { display: none !important; }
            .skip-link { position: absolute; left: 1rem; top: -6rem; z-index: 100; padding: 1rem; background: var(--surface-strong); color: var(--text-primary); }
            .skip-link:focus { top: 1rem; }
            :focus-visible { outline: 3px solid var(--accent-primary); outline-offset: 4px; }
            [id] { scroll-margin-top: 7rem; }
            .form-field { display: block; width: 100%; margin-top: .5rem; border-radius: .75rem; border: 1px solid var(--border-medium); background: var(--surface-strong); color: var(--text-primary); }
            .field-error { color: #b42318; font-size: .875rem; margin-top: .4rem; }
            html[data-theme="dark"] .field-error { color: #ffb4ab; }
            .demo-panel { background: var(--surface-muted); border: 1px solid var(--border-medium); border-radius: 1rem; padding: 1rem; }
            .demo-row { display: flex; justify-content: space-between; flex-wrap: wrap; gap: .5rem; padding: .75rem 0; border-bottom: 1px solid var(--border-soft); }
            .demo-row:last-child { border-bottom: 0; }
            @media (prefers-reduced-motion: reduce) {
                html { scroll-behavior: auto !important; }
                *, *::before, *::after { transition: none !important; animation: none !important; }
                .card-rise:hover { transform: none; }
            }
        </style>
    </head>
    <body class="text-slate-900 antialiased">
        <a class="skip-link" href="#inicio">Saltar al contenido</a>
        <div class="fixed inset-0 -z-10">
            <div id="page-bg" class="absolute inset-0 bg-gradient-to-br from-[#fff8f0] via-[#fbf9fd] to-[#f4edf8]"></div>
            <div class="absolute inset-0 mesh opacity-70"></div>
            <div class="bg-glow absolute -top-32 right-[-8rem] h-96 w-96 rounded-full bg-[#fbb034]/25 blur-3xl"></div>
            <div class="bg-glow absolute top-[32rem] left-[-8rem] h-96 w-96 rounded-full bg-[#ff6b35]/20 blur-3xl"></div>
            <div class="bg-glow absolute bottom-[-8rem] right-1/4 h-80 w-80 rounded-full bg-[#7928ca]/20 blur-3xl"></div>
        </div>

        <div class="relative z-10">
            <nav class="sticky top-0 z-50 border-b border-slate-900/5 bg-white/70 backdrop-blur-xl">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-20 items-center justify-between">
                        <a href="{{ url('/') }}" class="flex items-center gap-3">
                            <div class="flex h-16 w-16 bg-black items-center justify-center rounded-2xl shadow-lg overflow-hidden">
                                <img src="{{ asset('landing/logo-symbol.webp') }}" alt="Símbolo de SAKEV" width="54" height="54" class="h-11 w-11 object-contain rounded-xl" loading="eager" decoding="async" />
                            </div>
                            <div>
                                <p class="text-[11px] font-semibold uppercase tracking-[0.35em] text-slate-500">SAKEV Solutions</p>
                                <p class="hidden sm:block font-display text-sm font-semibold text-slate-900">Control que se entiende, resultados que se sienten</p>
                            </div>
                        </a>

                        <div class="hidden items-center gap-1 xl:flex">
                            <a href="{{ url('/') }}#soluciones" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-900/5 hover:text-slate-900">Soluciones</a>
                            <a href="{{ url('/') }}#ejemplos" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-900/5 hover:text-slate-900">Ejemplos</a>
                            <a href="{{ url('/') }}#metodo" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-900/5 hover:text-slate-900">Método</a>
                            <button id="theme-toggle" hidden type="button" class="ml-2 inline-flex items-center gap-2 rounded-full border border-slate-900/10 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:bg-slate-50" aria-label="Cambiar tema">
                                <svg id="theme-icon-sun" class="h-4 w-4 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364 6.364-1.414-1.414M7.05 7.05 5.636 5.636m0 12.728 1.414-1.414M18.364 5.636 16.95 7.05M12 8a4 4 0 100 8 4 4 0 000-8z" /></svg>
                                <svg id="theme-icon-moon" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" /></svg>
                                <span id="theme-toggle-label">Oscuro</span>
                            </button>
                            <a href="{{ route('solicitud.create') }}" class="ml-2 rounded-full bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-slate-900/15 transition hover:-translate-y-0.5 hover:bg-slate-800">Hablemos de tu proyecto</a>
                        </div>

                        <button id="mobile-menu-button" hidden class="inline-flex items-center justify-center rounded-full border border-slate-900/10 bg-white p-3 text-slate-700 shadow-sm xl:hidden" type="button" aria-label="Abrir menú de navegación" aria-controls="mobile-menu" aria-expanded="false">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div id="mobile-menu" class="border-t border-slate-900/5 bg-white/95 xl:hidden">
                    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6">
                        <div class="grid gap-2">
                            <a href="{{ url('/') }}#soluciones" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-900/5">Soluciones</a>
                            <a href="{{ url('/') }}#ejemplos" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-900/5">Ejemplos</a>
                            <a href="{{ url('/') }}#metodo" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-900/5">Método</a>
                            <button id="mobile-theme-toggle" hidden type="button" class="rounded-2xl border border-slate-900/10 bg-white px-4 py-3 text-left text-sm font-semibold text-slate-700">Cambiar tema</button>
                            <a href="{{ route('solicitud.create') }}" class="rounded-2xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white">Hablemos de tu proyecto</a>
                        </div>
                    </div>
                </div>
            </nav>

            <main id="inicio" tabindex="-1">@yield('content')</main>

            <footer class="border-t border-slate-900/5 bg-white/60">
                <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-8 text-sm text-slate-500 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('landing/logo-wordmark.webp') }}" alt="SAKEV" width="320" height="64" loading="lazy" decoding="async" class="h-6 w-auto object-contain rounded" />
                        <p>© 2026 SAKEV Solutions. Todos los derechos reservados.</p>
                    </div>
                    <p>Control, automatización y decisión para empresas que necesitan orden y visibilidad.</p>
                </div>
                <div class="mx-auto max-w-7xl px-4 pb-8 text-sm text-slate-600 flex flex-wrap gap-5">
                    <a href="{{ route('privacidad') }}" class="underline">Uso de tus datos</a>
                    <a href="{{ route('solicitud.create') }}" class="underline">Contacto</a>
                </div>
            </footer>
        </div>

        <script src="{{ asset('landing/site.js') }}" defer></script>
    </body>
</html>
