<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="SQ Smart Solutions - Solicita tu proyecto. Cuéntanos sobre tu idea y te ayudamos a convertirla en realidad.">
        <meta name="keywords" content="solicitar proyecto, desarrollo web, dashboards, KPIs, Power BI, Looker Studio, SQL, AppSheet">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url('/contacto') }}" />

        <title>Solicitar Proyecto - SQ Smart Solutions</title>

        <!-- Fonts (same as welcome) -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800&family=fraunces:500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* ─── Design Token System (shared with welcome) ─── */
            :root {
                --page-bg: #f4efe7;
                --page-fg: #0f172a;
                --surface: rgba(255, 255, 255, 0.92);
                --surface-strong: #ffffff;
                --surface-muted: rgba(255, 255, 255, 0.7);
                --border-soft: rgba(15, 23, 42, 0.08);
                --border-medium: rgba(15, 23, 42, 0.14);
                --shadow-soft: 0 24px 80px rgba(15, 23, 42, 0.08);
                --text-primary: #0f172a;
                --text-secondary: #475569;
                --text-muted: #94a3b8;
                --text-label: #374151;
                --input-bg: #ffffff;
                --input-border: #d1d5db;
                --input-text: #0f172a;
                --input-placeholder: #9ca3af;
                --input-focus-border: #1456b8;
                --input-focus-shadow: 0 0 0 3px #dbeafe;
                --accent-primary: #1456b8;
                --accent-secondary: #c08457;
                --btn-primary-bg: #0f172a;
                --btn-primary-hover: #1e293b;
                color-scheme: light;
            }

            html[data-theme="dark"] {
                --page-bg: #0d1b2e;
                --page-fg: #e8f0fe;
                --surface: #1a2d4a;
                --surface-strong: #1e3356;
                --surface-muted: #152438;
                --border-soft: #1e3a5f;
                --border-medium: #2a4a72;
                --shadow-soft: 0 24px 80px #050d18;
                --text-primary: #e8f0fe;
                --text-secondary: #b8d4f0;
                --text-muted: #6fa0cc;
                --text-label: #b8d4f0;
                --input-bg: #152438;
                --input-border: #1e3a5f;
                --input-text: #e8f0fe;
                --input-placeholder: #6fa0cc;
                --input-focus-border: #3b82f6;
                --input-focus-shadow: 0 0 0 3px #0d2040;
                --accent-primary: #1456b8;
                --accent-secondary: #c08457;
                --btn-primary-bg: #1456b8;
                --btn-primary-hover: #1769d4;
                color-scheme: dark;
            }

            * {
                transition: background-color 300ms ease, color 300ms ease, border-color 300ms ease, box-shadow 300ms ease;
            }

            body {
                font-family: 'Manrope', sans-serif;
                background: var(--page-bg);
                color: var(--page-fg);
            }

            .font-display { font-family: 'Fraunces', serif; }

            /* ─── Navigation ─── */
            .site-nav {
                position: sticky;
                top: 0;
                z-index: 50;
                border-bottom: 1px solid var(--border-soft);
                background: var(--surface);
                backdrop-filter: blur(20px);
            }

            /* ─── Form Inputs ─── */
            .form-input {
                width: 100%;
                padding: 12px 16px;
                border-radius: 12px;
                font-size: 0.875rem;
                background-color: var(--input-bg);
                border: 1px solid var(--input-border);
                color: var(--input-text);
            }

            .form-input:focus {
                outline: none;
                border-color: var(--input-focus-border);
                box-shadow: var(--input-focus-shadow);
            }

            .form-input::placeholder {
                color: var(--input-placeholder);
            }

            .form-input option {
                background-color: var(--input-bg);
                color: var(--input-text);
            }

            .form-input.is-error {
                border-color: #ef4444;
            }

            /* ─── Budget / Tech toggles ─── */
            .toggle-label {
                display: block;
                padding: 10px 12px;
                border-radius: 12px;
                border: 1px solid var(--border-medium);
                background-color: var(--surface-muted);
                color: var(--text-secondary);
                font-size: 0.75rem;
                font-weight: 500;
                text-align: center;
                cursor: pointer;
                user-select: none;
            }

            input[type="radio"]:checked + .toggle-label,
            input[type="checkbox"]:checked + .toggle-label {
                border-color: var(--accent-primary);
                background-color: var(--accent-primary);
                color: #ffffff;
            }

            .toggle-label:hover {
                border-color: var(--accent-primary);
                color: var(--text-primary);
            }

            /* ─── Pill toggles (tech stack) ─── */
            .pill-label {
                display: inline-block;
                padding: 6px 14px;
                border-radius: 9999px;
                border: 1px solid var(--border-medium);
                background-color: var(--surface-muted);
                color: var(--text-secondary);
                font-size: 0.75rem;
                font-weight: 500;
                cursor: pointer;
                user-select: none;
            }

            input[type="checkbox"]:checked + .pill-label {
                border-color: var(--accent-primary);
                background-color: var(--accent-primary);
                color: #ffffff;
            }

            .pill-label:hover {
                border-color: var(--accent-primary);
                color: var(--text-primary);
            }

            /* ─── Privacy checkbox ─── */
            .privacy-box {
                width: 20px;
                height: 20px;
                border-radius: 6px;
                border: 2px solid var(--border-medium);
                background-color: var(--input-bg);
                flex-shrink: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            input[type="checkbox"]:checked ~ .privacy-box {
                border-color: var(--accent-primary);
                background-color: var(--accent-primary);
            }

            /* ─── Form surface card ─── */
            .form-card {
                background-color: var(--surface-strong);
                border: 1px solid var(--border-soft);
                border-radius: 1.5rem;
                box-shadow: var(--shadow-soft);
            }

            .form-card-header {
                background-color: var(--surface);
                border-bottom: 1px solid var(--border-soft);
            }

            .form-section-divider {
                border-top: 1px solid var(--border-soft);
            }

            /* ─── Info cards ─── */
            .info-card {
                background-color: var(--surface);
                border: 1px solid var(--border-soft);
                border-radius: 1rem;
                transition: transform 240ms ease, box-shadow 240ms ease;
            }

            .info-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 16px 40px #050d18;
            }

            /* ─── Labels / helper text ─── */
            .field-label {
                display: block;
                font-size: 0.875rem;
                font-weight: 500;
                color: var(--text-label);
                margin-bottom: 6px;
            }

            .field-required { color: var(--accent-primary); }

            .field-error {
                font-size: 0.75rem;
                color: #ef4444;
                margin-top: 4px;
            }

            .field-hint {
                font-size: 0.75rem;
                color: var(--text-muted);
                margin-top: 4px;
            }

            /* ─── Success / Error banners ─── */
            .alert-success {
                background-color: #ecfdf5;
                border: 1px solid #a7f3d0;
                border-radius: 1rem;
            }

            html[data-theme="dark"] .alert-success {
                background-color: #0a2a1e;
                border-color: #065f46;
            }

            .alert-error {
                background-color: #fef2f2;
                border: 1px solid #fecaca;
                border-radius: 1rem;
            }

            html[data-theme="dark"] .alert-error {
                background-color: #2a0a0a;
                border-color: #7f1d1d;
            }

            /* ─── Footer ─── */
            .site-footer {
                border-top: 1px solid var(--border-soft);
                background: var(--surface);
            }

            /* ─── Page background ─── */
            #page-bg {
                position: fixed;
                inset: 0;
                z-index: -10;
                background: var(--page-bg);
            }

            /* ─── Reveal animation ─── */
            .reveal {
                opacity: 0;
                transform: translateY(18px);
                transition: opacity 600ms ease, transform 600ms ease;
            }

            .reveal.is-visible {
                opacity: 1;
                transform: translateY(0);
            }

            /* ─── Theme toggle & mobile menu ─── */
            html[data-theme="dark"] #theme-toggle,
            html[data-theme="dark"] #mobile-menu-button {
                background-color: #1e3356 !important;
                border-color: #2a4a72 !important;
                color: #e8f0fe !important;
            }

            html[data-theme="dark"] #theme-toggle:hover {
                background-color: #243d66 !important;
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
    <body class="antialiased overflow-x-hidden">

        <!-- Background -->
        <div id="page-bg"></div>

        <!-- Navigation -->
        <nav class="site-nav">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-20 items-center justify-between">
                    <a href="{{ url('/') }}" class="flex items-center gap-3">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-900 shadow-lg shadow-slate-900/15">
                            <img src="{{ asset('landing/sq.png') }}" alt="SQ Smart Solutions Logo" width="40" height="40" class="h-10 w-10 object-contain" loading="eager" decoding="async" />
                        </div>
                        <div>
                            <p class="text-[11px] font-semibold uppercase tracking-[0.35em] text-slate-500">SQ Smart Solutions</p>
                            <p class="font-display text-lg font-semibold" style="color: var(--text-primary)">Control que se entiende, resultados que se sienten</p>
                        </div>
                    </a>

                    <div class="hidden items-center gap-2 md:flex">
                        <a href="{{ url('/') }}" class="rounded-full px-4 py-2 text-sm font-medium transition hover:bg-slate-900/5" style="color: var(--text-secondary)">Inicio</a>
                        <a href="{{ url('/#propuesta') }}" class="rounded-full px-4 py-2 text-sm font-medium transition hover:bg-slate-900/5" style="color: var(--text-secondary)">Servicios</a>
                        <a href="{{ url('/#impacto') }}" class="rounded-full px-4 py-2 text-sm font-medium transition hover:bg-slate-900/5" style="color: var(--text-secondary)">Impacto</a>
                        <button id="theme-toggle" type="button" class="ml-2 inline-flex items-center gap-2 rounded-full border border-slate-900/10 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:bg-slate-50" aria-label="Cambiar tema">
                            <svg id="theme-icon-sun" class="h-4 w-4 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364 6.364-1.414-1.414M7.05 7.05 5.636 5.636m0 12.728 1.414-1.414M18.364 5.636 16.95 7.05M12 8a4 4 0 100 8 4 4 0 000-8z" /></svg>
                            <svg id="theme-icon-moon" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" /></svg>
                            <span id="theme-toggle-label">Oscuro</span>
                        </button>
                        <a href="{{ url('/') }}" class="ml-2 rounded-full px-5 py-2.5 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5" style="background-color: var(--btn-primary-bg)">Volver al inicio</a>
                    </div>

                    <button id="mobile-menu-button" class="inline-flex items-center justify-center rounded-full border border-slate-900/10 bg-white p-3 text-slate-700 shadow-sm md:hidden" type="button" aria-controls="mobile-menu" aria-expanded="false">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="mobile-menu" class="hidden border-t md:hidden" style="border-color: var(--border-soft); background: var(--surface);">
                <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6">
                    <div class="grid gap-2">
                        <a href="{{ url('/') }}" class="rounded-2xl px-4 py-3 text-sm font-medium" style="color: var(--text-secondary)">Inicio</a>
                        <a href="{{ url('/#propuesta') }}" class="rounded-2xl px-4 py-3 text-sm font-medium" style="color: var(--text-secondary)">Servicios</a>
                        <a href="{{ url('/#impacto') }}" class="rounded-2xl px-4 py-3 text-sm font-medium" style="color: var(--text-secondary)">Impacto</a>
                        <button id="mobile-theme-toggle" type="button" class="rounded-2xl border px-4 py-3 text-left text-sm font-semibold" style="border-color: var(--border-medium); color: var(--text-primary)">Cambiar tema</button>
                        <a href="{{ url('/') }}" class="rounded-2xl px-4 py-3 text-sm font-semibold text-white" style="background-color: var(--btn-primary-bg)">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-12 pb-8 text-center reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6" style="background-color: var(--surface); border: 1px solid var(--border-soft);">
                <div class="w-2 h-2 rounded-full animate-pulse" style="background-color: var(--accent-primary)"></div>
                <span class="text-sm font-medium" style="color: var(--text-secondary)">Solicitud de Proyecto</span>
            </div>
            <h1 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight mb-4" style="color: var(--text-primary)">
                ¿Tienes un <span style="color: var(--accent-primary)">Proyecto</span> en Mente?
            </h1>
            <p class="text-xl max-w-2xl mx-auto" style="color: var(--text-secondary)">
                Cuéntanos sobre tu idea y te ayudaremos a convertirla en una
                <strong style="color: var(--accent-primary)">solución digital</strong> a la medida de tu empresa.
            </p>
        </div>

        <!-- Main Content -->
        <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">

            @if(session('success'))
                <!-- Success Message -->
                <div class="alert-success mb-8 p-6 flex items-start gap-4 reveal">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5" style="background-color: #d1fae5">
                        <svg class="w-5 h-5" style="color: #059669" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1" style="color: #065f46">¡Solicitud Enviada Exitosamente!</h3>
                        <p style="color: var(--text-secondary)">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <!-- Validation Errors -->
                <div class="alert-error mb-8 p-6 reveal">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="w-5 h-5" style="color: #dc2626" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h3 class="font-semibold" style="color: #dc2626">Por favor corrige los siguientes errores:</h3>
                    </div>
                    <ul class="space-y-1">
                        @foreach($errors->all() as $error)
                            <li class="text-sm flex items-center gap-2" style="color: var(--text-secondary)">
                                <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background-color: #ef4444"></span>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Card -->
            <div class="form-card reveal">

                <!-- Form Header -->
                <div class="form-card-header px-8 py-6 rounded-t-3xl">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div>
                            <h2 class="font-display text-2xl font-semibold" style="color: var(--text-primary)">Formulario de Solicitud</h2>
                            <p class="text-sm mt-1" style="color: var(--text-muted)">Todos los campos marcados con <span class="field-required">*</span> son obligatorios</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm" style="color: var(--text-muted)">
                            <svg class="w-4 h-4" style="color: #10b981" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            <span>Información segura y confidencial</span>
                        </div>
                    </div>
                </div>

                <!-- Form Body -->
                <form action="{{ route('solicitud.store') }}" method="POST" class="p-8 space-y-8">
                    @csrf

                    <!-- Section 1: Client Information -->
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: var(--accent-primary)">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold" style="color: var(--text-primary)">Información de Contacto</h3>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="nombre" class="field-label">
                                    Nombre Completo <span class="field-required">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="nombre"
                                    name="nombre"
                                    value="{{ old('nombre') }}"
                                    placeholder="Ej. Juan García López"
                                    required
                                    class="form-input @error('nombre') is-error @enderror"
                                >
                                @error('nombre')
                                    <p class="field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Company -->
                            <div>
                                <label for="empresa" class="field-label">Empresa / Organización</label>
                                <input
                                    type="text"
                                    id="empresa"
                                    name="empresa"
                                    value="{{ old('empresa') }}"
                                    placeholder="Ej. Mi Empresa S.A. de C.V."
                                    class="form-input"
                                >
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="field-label">
                                    Correo Electrónico <span class="field-required">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="correo@tuempresa.com"
                                    required
                                    class="form-input @error('email') is-error @enderror"
                                >
                                @error('email')
                                    <p class="field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="telefono" class="field-label">
                                    Teléfono / WhatsApp <span class="field-required">*</span>
                                </label>
                                <input
                                    type="tel"
                                    id="telefono"
                                    name="telefono"
                                    value="{{ old('telefono') }}"
                                    placeholder="Ej. +52 55 1234 5678"
                                    required
                                    class="form-input @error('telefono') is-error @enderror"
                                >
                                @error('telefono')
                                    <p class="field-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section-divider"></div>

                    <!-- Section 2: Project Details -->
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #4f46e5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold" style="color: var(--text-primary)">Detalles del Proyecto</h3>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <!-- Project Type -->
                            <div>
                                <label for="tipo_proyecto" class="field-label">
                                    Tipo de Proyecto <span class="field-required">*</span>
                                </label>
                                <select
                                    id="tipo_proyecto"
                                    name="tipo_proyecto"
                                    required
                                    class="form-input @error('tipo_proyecto') is-error @enderror"
                                >
                                    <option value="" disabled {{ old('tipo_proyecto') ? '' : 'selected' }}>Selecciona una opción</option>
                                    <option value="dashboard" {{ old('tipo_proyecto') == 'dashboard' ? 'selected' : '' }}>📊 Dashboard & Analytics</option>
                                    <option value="web" {{ old('tipo_proyecto') == 'web' ? 'selected' : '' }}>💻 Desarrollo Web / Aplicación</option>
                                    <option value="base_datos" {{ old('tipo_proyecto') == 'base_datos' ? 'selected' : '' }}>🗄️ Base de Datos & SQL</option>
                                    <option value="appsheet" {{ old('tipo_proyecto') == 'appsheet' ? 'selected' : '' }}>📱 App Móvil (AppSheet)</option>
                                    <option value="business_intelligence" {{ old('tipo_proyecto') == 'business_intelligence' ? 'selected' : '' }}>🧠 Business Intelligence</option>
                                    <option value="consultoria" {{ old('tipo_proyecto') == 'consultoria' ? 'selected' : '' }}>💼 Consultoría Digital</option>
                                    <option value="otro" {{ old('tipo_proyecto') == 'otro' ? 'selected' : '' }}>🔧 Otro</option>
                                </select>
                                @error('tipo_proyecto')
                                    <p class="field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Timeline -->
                            <div>
                                <label for="tiempo_estimado" class="field-label">
                                    Tiempo Estimado <span class="field-required">*</span>
                                </label>
                                <select
                                    id="tiempo_estimado"
                                    name="tiempo_estimado"
                                    required
                                    class="form-input @error('tiempo_estimado') is-error @enderror"
                                >
                                    <option value="" disabled {{ old('tiempo_estimado') ? '' : 'selected' }}>¿Cuándo lo necesitas?</option>
                                    <option value="urgente" {{ old('tiempo_estimado') == 'urgente' ? 'selected' : '' }}>🚀 Urgente (menos de 2 semanas)</option>
                                    <option value="1_mes" {{ old('tiempo_estimado') == '1_mes' ? 'selected' : '' }}>📅 1 mes</option>
                                    <option value="1_3_meses" {{ old('tiempo_estimado') == '1_3_meses' ? 'selected' : '' }}>📆 1 a 3 meses</option>
                                    <option value="3_6_meses" {{ old('tiempo_estimado') == '3_6_meses' ? 'selected' : '' }}>🗓️ 3 a 6 meses</option>
                                    <option value="flexible" {{ old('tiempo_estimado') == 'flexible' ? 'selected' : '' }}>⏳ Flexible / Sin prisa</option>
                                </select>
                                @error('tiempo_estimado')
                                    <p class="field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Budget -->
                            <div class="sm:col-span-2">
                                <label class="field-label">Rango de Presupuesto (MXN)</label>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                    @foreach([
                                        ['value' => 'menos_5k',   'label' => 'Menos de $5,000'],
                                        ['value' => '5k_15k',     'label' => '$5,000 – $15,000'],
                                        ['value' => '15k_30k',    'label' => '$15,000 – $30,000'],
                                        ['value' => 'mas_30k',    'label' => 'Más de $30,000'],
                                    ] as $opcion)
                                        <label class="cursor-pointer block">
                                            <input
                                                type="radio"
                                                name="presupuesto"
                                                value="{{ $opcion['value'] }}"
                                                {{ old('presupuesto') == $opcion['value'] ? 'checked' : '' }}
                                                class="sr-only"
                                                id="presupuesto_{{ $opcion['value'] }}"
                                            >
                                            <span class="toggle-label">{{ $opcion['label'] }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Project Description -->
                        <div>
                            <label for="descripcion" class="field-label">
                                Descripción del Proyecto <span class="field-required">*</span>
                            </label>
                            <textarea
                                id="descripcion"
                                name="descripcion"
                                rows="5"
                                required
                                placeholder="Describe tu proyecto: ¿Qué problema quieres resolver? ¿Qué funcionalidades necesitas? ¿Tienes algún ejemplo o referencia?"
                                class="form-input resize-none @error('descripcion') is-error @enderror"
                            >{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                                <p class="field-error">{{ $message }}</p>
                            @enderror
                            <p class="field-hint">Mínimo 30 caracteres. Entre más detalle, mejor podemos ayudarte.</p>
                        </div>

                        <!-- Tech Stack Preferences -->
                        <div>
                            <label class="field-label">
                                Tecnologías de Interés
                                <span class="font-normal" style="color: var(--text-muted)"> (selecciona todas las que apliquen)</span>
                            </label>
                            <div class="flex flex-wrap gap-3">
                                @foreach([
                                    'Power BI', 'Looker Studio', 'AppSheet', 'SQL / MySQL',
                                    'Laravel', 'React', 'Tailwind CSS', 'Python',
                                    'Google Sheets', 'Power Automate', 'No tengo preferencia'
                                ] as $tech)
                                    <label class="cursor-pointer">
                                        <input
                                            type="checkbox"
                                            name="tecnologias[]"
                                            value="{{ $tech }}"
                                            {{ in_array($tech, old('tecnologias', [])) ? 'checked' : '' }}
                                            class="sr-only"
                                        >
                                        <span class="pill-label">{{ $tech }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-section-divider"></div>

                    <!-- Section 3: Additional Info -->
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #059669">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold" style="color: var(--text-primary)">Información Adicional</h3>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <!-- How did they find us -->
                            <div>
                                <label for="como_nos_encontro" class="field-label">¿Cómo nos encontraste?</label>
                                <select
                                    id="como_nos_encontro"
                                    name="como_nos_encontro"
                                    class="form-input"
                                >
                                    <option value="" {{ old('como_nos_encontro') ? '' : 'selected' }}>Selecciona una opción</option>
                                    <option value="google" {{ old('como_nos_encontro') == 'google' ? 'selected' : '' }}>🔍 Google / Búsqueda en internet</option>
                                    <option value="redes_sociales" {{ old('como_nos_encontro') == 'redes_sociales' ? 'selected' : '' }}>📱 Redes Sociales</option>
                                    <option value="recomendacion" {{ old('como_nos_encontro') == 'recomendacion' ? 'selected' : '' }}>👥 Recomendación de alguien</option>
                                    <option value="linkedin" {{ old('como_nos_encontro') == 'linkedin' ? 'selected' : '' }}>💼 LinkedIn</option>
                                    <option value="evento" {{ old('como_nos_encontro') == 'evento' ? 'selected' : '' }}>🎪 Evento / Conferencia</option>
                                    <option value="otro" {{ old('como_nos_encontro') == 'otro' ? 'selected' : '' }}>🔧 Otro</option>
                                </select>
                            </div>

                            <!-- Preferred Contact Method -->
                            <div>
                                <label for="medio_contacto" class="field-label">
                                    Medio de Contacto Preferido <span class="field-required">*</span>
                                </label>
                                <select
                                    id="medio_contacto"
                                    name="medio_contacto"
                                    required
                                    class="form-input @error('medio_contacto') is-error @enderror"
                                >
                                    <option value="" disabled {{ old('medio_contacto') ? '' : 'selected' }}>¿Cómo prefieres que te contactemos?</option>
                                    <option value="email" {{ old('medio_contacto') == 'email' ? 'selected' : '' }}>📧 Correo Electrónico</option>
                                    <option value="whatsapp" {{ old('medio_contacto') == 'whatsapp' ? 'selected' : '' }}>💬 WhatsApp</option>
                                    <option value="llamada" {{ old('medio_contacto') == 'llamada' ? 'selected' : '' }}>📞 Llamada Telefónica</option>
                                    <option value="videollamada" {{ old('medio_contacto') == 'videollamada' ? 'selected' : '' }}>🎥 Videollamada (Zoom / Meet)</option>
                                </select>
                                @error('medio_contacto')
                                    <p class="field-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Additional Comments -->
                        <div>
                            <label for="comentarios" class="field-label">Comentarios Adicionales</label>
                            <textarea
                                id="comentarios"
                                name="comentarios"
                                rows="3"
                                placeholder="¿Hay algo más que quieras que sepamos? Dudas, restricciones técnicas, integraciones requeridas..."
                                class="form-input resize-none"
                            >{{ old('comentarios') }}</textarea>
                        </div>

                        <!-- Privacy Consent -->
                        <div>
                            <label class="cursor-pointer flex items-start gap-3">
                                <input
                                    type="checkbox"
                                    name="acepta_privacidad"
                                    value="1"
                                    required
                                    {{ old('acepta_privacidad') ? 'checked' : '' }}
                                    id="acepta_privacidad"
                                    class="sr-only"
                                >
                                <div id="privacy-box" class="privacy-box mt-0.5 flex-shrink-0">
                                    <svg id="privacy-check" class="w-3 h-3 text-white hidden" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-sm leading-relaxed" style="color: var(--text-secondary)">
                                    Acepto que SQ Smart Solutions procese mis datos para responder a esta solicitud.
                                    La información proporcionada es confidencial y no será compartida con terceros.
                                </span>
                            </label>
                            @error('acepta_privacidad')
                                <p class="field-error mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-3 rounded-full px-8 py-4 text-sm font-semibold text-white shadow-xl transition hover:-translate-y-0.5"
                            style="background-color: var(--btn-primary-bg); box-shadow: 0 8px 24px #050d1880;"
                            onmouseover="this.style.backgroundColor='var(--btn-primary-hover)'"
                            onmouseout="this.style.backgroundColor='var(--btn-primary-bg)'"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Enviar Solicitud de Proyecto
                        </button>
                        <p class="text-xs mt-3" style="color: var(--text-muted)">
                            Te contactaremos en un plazo de 24–48 horas hábiles.
                        </p>
                    </div>
                </form>
            </div>

            <!-- Info Cards -->
            <div class="grid sm:grid-cols-3 gap-6 mt-12">
                <div class="info-card p-6 text-center reveal">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background-color: var(--accent-primary)">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2" style="color: var(--text-primary)">Respuesta Rápida</h4>
                    <p class="text-sm" style="color: var(--text-secondary)">Te respondemos en 24–48 horas hábiles con una propuesta inicial.</p>
                </div>

                <div class="info-card p-6 text-center reveal">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background-color: #059669">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2" style="color: var(--text-primary)">Sin Compromiso</h4>
                    <p class="text-sm" style="color: var(--text-secondary)">La consulta inicial es completamente gratuita y sin compromiso de contratación.</p>
                </div>

                <div class="info-card p-6 text-center reveal">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background-color: #7c3aed">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2" style="color: var(--text-primary)">Equipo Experto</h4>
                    <p class="text-sm" style="color: var(--text-secondary)">Más de 50 proyectos entregados con 100% de satisfacción en cada cliente.</p>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-8 text-sm sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8" style="color: var(--text-muted)">
                <p>© {{ date('Y') }} SQ Smart Solutions. Todos los derechos reservados.</p>
                <p>Control, automatización y decisión para empresas que necesitan orden y visibilidad.</p>
            </div>
        </footer>

        <script>
            // ─── Privacy checkbox visual toggle ───
            const privacyInput = document.getElementById('acepta_privacidad');
            const privacyBox   = document.getElementById('privacy-box');
            const privacyCheck = document.getElementById('privacy-check');

            function updatePrivacyBox() {
                if (privacyInput.checked) {
                    privacyBox.style.backgroundColor = 'var(--accent-primary)';
                    privacyBox.style.borderColor     = 'var(--accent-primary)';
                    privacyCheck.classList.remove('hidden');
                } else {
                    privacyBox.style.backgroundColor = 'var(--input-bg)';
                    privacyBox.style.borderColor     = 'var(--border-medium)';
                    privacyCheck.classList.add('hidden');
                }
            }

            privacyInput.addEventListener('change', updatePrivacyBox);
            updatePrivacyBox(); // initialize on page load

            // ─── Theme management (same as welcome) ───
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu       = document.getElementById('mobile-menu');
            const themeToggle      = document.getElementById('theme-toggle');
            const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
            const themeLabel       = document.getElementById('theme-toggle-label');
            const themeIconSun     = document.getElementById('theme-icon-sun');
            const themeIconMoon    = document.getElementById('theme-icon-moon');

            const applyTheme = (theme) => {
                const isDark = theme === 'dark';
                document.documentElement.dataset.theme = theme;

                if (themeLabel) {
                    themeLabel.textContent = isDark ? 'Claro' : 'Oscuro';
                }

                if (themeIconSun && themeIconMoon) {
                    themeIconSun.style.transform  = isDark ? 'rotate(180deg)' : 'rotate(0deg)';
                    themeIconMoon.style.transform = isDark ? 'rotate(0deg)'   : 'rotate(180deg)';
                    themeIconSun.classList.toggle('hidden', !isDark);
                    themeIconMoon.classList.toggle('hidden', isDark);
                }

                if (mobileThemeToggle) {
                    mobileThemeToggle.textContent = isDark ? 'Cambiar a claro' : 'Cambiar a oscuro';
                }

                localStorage.setItem('sq-theme', theme);
                window.dispatchEvent(new CustomEvent('themechange', { detail: { theme } }));
            };

            const savedTheme      = localStorage.getItem('sq-theme');
            const preferredTheme  = savedTheme ?? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            applyTheme(preferredTheme);

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                if (!localStorage.getItem('sq-theme')) {
                    applyTheme(e.matches ? 'dark' : 'light');
                }
            });

            themeToggle?.addEventListener('click', () => {
                applyTheme(document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark');
            });

            mobileThemeToggle?.addEventListener('click', () => {
                applyTheme(document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark');
            });

            // ─── Mobile menu ───
            mobileMenuButton?.addEventListener('click', function () {
                const isHidden = mobileMenu.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', String(!isHidden));
            });

            // ─── Reveal animations ───
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -8% 0px' });

            document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
        </script>

    </body>
</html>
