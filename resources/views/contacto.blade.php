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

            .card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .form-input-dark {
                background-color: rgba(30, 41, 59, 0.8);
                border: 1px solid rgba(71, 85, 105, 0.5);
                color: #e2e8f0;
                transition: all 0.3s ease;
            }

            .form-input-dark:focus {
                outline: none;
                border-color: rgba(59, 130, 246, 0.7);
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
                background-color: rgba(30, 41, 59, 0.95);
            }

            .form-input-dark::placeholder {
                color: #64748b;
            }

            .form-input-dark option {
                background-color: #1e293b;
                color: #e2e8f0;
            }

            .step-indicator {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .step-active {
                background: linear-gradient(135deg, #3B82F6, #1D4ED8);
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
            }

            .step-completed {
                background: linear-gradient(135deg, #10B981, #059669);
            }

            .step-pending {
                background-color: rgba(51, 65, 85, 0.8);
            }
        </style>
    </head>
    <body class="font-inter antialiased bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 min-h-screen overflow-x-hidden">

        <!-- Background Pattern -->
        <div class="fixed inset-0 z-0">
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

            <!-- Page Header -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8 text-center">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-500/10 border border-blue-400/20 mb-6">
                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse mr-2"></div>
                    <span class="text-blue-300 text-sm font-medium">Solicitud de Proyecto</span>
                </div>
                <h1 class="text-4xl sm:text-5xl font-space-grotesk font-bold text-white mb-4">
                    ¿Tienes un <span class="gradient-text">Proyecto</span> en Mente?
                </h1>
                <p class="text-xl text-slate-300 max-w-2xl mx-auto">
                    Cuéntanos sobre tu idea y te ayudaremos a convertirla en una
                    <span class="text-blue-400 font-semibold">solución digital</span> a la medida de tu empresa.
                </p>
            </div>

            <!-- Main Content -->
            <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">

                @if(session('success'))
                    <!-- Success Message -->
                    <div class="mb-8 p-6 bg-emerald-500/10 border border-emerald-400/30 rounded-2xl flex items-start gap-4">
                        <div class="w-10 h-10 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-emerald-300 font-semibold text-lg mb-1">¡Solicitud Enviada Exitosamente!</h3>
                            <p class="text-slate-300">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                @if($errors->any())
                    <!-- Validation Errors -->
                    <div class="mb-8 p-6 bg-red-500/10 border border-red-400/30 rounded-2xl">
                        <div class="flex items-center gap-3 mb-3">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h3 class="text-red-300 font-semibold">Por favor corrige los siguientes errores:</h3>
                        </div>
                        <ul class="space-y-1">
                            @foreach($errors->all() as $error)
                                <li class="text-slate-300 text-sm flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-red-400 rounded-full"></span>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Card -->
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-3xl blur-2xl"></div>
                    <div class="relative bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-sm rounded-2xl border border-slate-700/50 shadow-2xl overflow-hidden">

                        <!-- Form Header -->
                        <div class="px-8 py-6 border-b border-slate-700/50 bg-gradient-to-r from-blue-600/10 to-purple-600/10">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <h2 class="text-2xl font-space-grotesk font-bold text-white">Formulario de Solicitud</h2>
                                    <p class="text-slate-400 text-sm mt-1">Todos los campos marcados con <span class="text-blue-400">*</span> son obligatorios</p>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-400">
                                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-white">Información de Contacto</h3>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-6">
                                    <!-- Name -->
                                    <div class="space-y-2">
                                        <label for="nombre" class="block text-sm font-medium text-slate-300">
                                            Nombre Completo <span class="text-blue-400">*</span>
                                        </label>
                                        <input
                                            type="text"
                                            id="nombre"
                                            name="nombre"
                                            value="{{ old('nombre') }}"
                                            placeholder="Ej. Juan García López"
                                            required
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm @error('nombre') border-red-500/70 @enderror"
                                        >
                                        @error('nombre')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Company -->
                                    <div class="space-y-2">
                                        <label for="empresa" class="block text-sm font-medium text-slate-300">
                                            Empresa / Organización
                                        </label>
                                        <input
                                            type="text"
                                            id="empresa"
                                            name="empresa"
                                            value="{{ old('empresa') }}"
                                            placeholder="Ej. Mi Empresa S.A. de C.V."
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm"
                                        >
                                    </div>

                                    <!-- Email -->
                                    <div class="space-y-2">
                                        <label for="email" class="block text-sm font-medium text-slate-300">
                                            Correo Electrónico <span class="text-blue-400">*</span>
                                        </label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="correo@tuempresa.com"
                                            required
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm @error('email') border-red-500/70 @enderror"
                                        >
                                        @error('email')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="space-y-2">
                                        <label for="telefono" class="block text-sm font-medium text-slate-300">
                                            Teléfono / WhatsApp <span class="text-blue-400">*</span>
                                        </label>
                                        <input
                                            type="tel"
                                            id="telefono"
                                            name="telefono"
                                            value="{{ old('telefono') }}"
                                            placeholder="Ej. +52 55 1234 5678"
                                            required
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm @error('telefono') border-red-500/70 @enderror"
                                        >
                                        @error('telefono')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-slate-700/50"></div>

                            <!-- Section 2: Project Details -->
                            <div class="space-y-6">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-white">Detalles del Proyecto</h3>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-6">
                                    <!-- Project Type -->
                                    <div class="space-y-2">
                                        <label for="tipo_proyecto" class="block text-sm font-medium text-slate-300">
                                            Tipo de Proyecto <span class="text-blue-400">*</span>
                                        </label>
                                        <select
                                            id="tipo_proyecto"
                                            name="tipo_proyecto"
                                            required
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm @error('tipo_proyecto') border-red-500/70 @enderror"
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
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Timeline -->
                                    <div class="space-y-2">
                                        <label for="tiempo_estimado" class="block text-sm font-medium text-slate-300">
                                            Tiempo Estimado <span class="text-blue-400">*</span>
                                        </label>
                                        <select
                                            id="tiempo_estimado"
                                            name="tiempo_estimado"
                                            required
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm @error('tiempo_estimado') border-red-500/70 @enderror"
                                        >
                                            <option value="" disabled {{ old('tiempo_estimado') ? '' : 'selected' }}>¿Cuándo lo necesitas?</option>
                                            <option value="urgente" {{ old('tiempo_estimado') == 'urgente' ? 'selected' : '' }}>🚀 Urgente (menos de 2 semanas)</option>
                                            <option value="1_mes" {{ old('tiempo_estimado') == '1_mes' ? 'selected' : '' }}>📅 1 mes</option>
                                            <option value="1_3_meses" {{ old('tiempo_estimado') == '1_3_meses' ? 'selected' : '' }}>📆 1 a 3 meses</option>
                                            <option value="3_6_meses" {{ old('tiempo_estimado') == '3_6_meses' ? 'selected' : '' }}>🗓️ 3 a 6 meses</option>
                                            <option value="flexible" {{ old('tiempo_estimado') == 'flexible' ? 'selected' : '' }}>⏳ Flexible / Sin prisa</option>
                                        </select>
                                        @error('tiempo_estimado')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Budget -->
                                    <div class="space-y-2 sm:col-span-2">
                                        <label for="presupuesto" class="block text-sm font-medium text-slate-300">
                                            Rango de Presupuesto (MXN)
                                        </label>
                                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                            @foreach([
                                                ['value' => 'menos_5k',   'label' => 'Menos de $5,000'],
                                                ['value' => '5k_15k',     'label' => '$5,000 – $15,000'],
                                                ['value' => '15k_30k',    'label' => '$15,000 – $30,000'],
                                                ['value' => 'mas_30k',    'label' => 'Más de $30,000'],
                                            ] as $opcion)
                                                <label class="relative cursor-pointer">
                                                    <input
                                                        type="radio"
                                                        name="presupuesto"
                                                        value="{{ $opcion['value'] }}"
                                                        {{ old('presupuesto') == $opcion['value'] ? 'checked' : '' }}
                                                        class="sr-only peer"
                                                    >
                                                    <div class="px-3 py-3 rounded-xl border border-slate-600/50 bg-slate-800/50 text-slate-400 text-xs font-medium text-center transition-all duration-200 peer-checked:border-blue-400/70 peer-checked:bg-blue-500/10 peer-checked:text-blue-300 hover:border-slate-500 hover:text-slate-300">
                                                        {{ $opcion['label'] }}
                                                    </div>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Description -->
                                <div class="space-y-2">
                                    <label for="descripcion" class="block text-sm font-medium text-slate-300">
                                        Descripción del Proyecto <span class="text-blue-400">*</span>
                                    </label>
                                    <textarea
                                        id="descripcion"
                                        name="descripcion"
                                        rows="5"
                                        required
                                        placeholder="Describe tu proyecto: ¿Qué problema quieres resolver? ¿Qué funcionalidades necesitas? ¿Tienes algún ejemplo o referencia?"
                                        class="form-input-dark w-full px-4 py-3 rounded-xl text-sm resize-none @error('descripcion') border-red-500/70 @enderror"
                                    >{{ old('descripcion') }}</textarea>
                                    @error('descripcion')
                                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                    <p class="text-slate-500 text-xs">Mínimo 30 caracteres. Entre más detalle, mejor podemos ayudarte.</p>
                                </div>

                                <!-- Tech Stack Preferences -->
                                <div class="space-y-3">
                                    <label class="block text-sm font-medium text-slate-300">
                                        Tecnologías de Interés
                                        <span class="text-slate-500 font-normal ml-1">(selecciona todas las que apliquen)</span>
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
                                                    class="sr-only peer"
                                                >
                                                <span class="px-3 py-1.5 rounded-full border border-slate-600/50 bg-slate-800/50 text-slate-400 text-xs font-medium transition-all duration-200 peer-checked:border-blue-400/70 peer-checked:bg-blue-500/10 peer-checked:text-blue-300 hover:border-slate-500 hover:text-slate-300 select-none">
                                                    {{ $tech }}
                                                </span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-slate-700/50"></div>

                            <!-- Section 3: Additional Info -->
                            <div class="space-y-6">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-white">Información Adicional</h3>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-6">
                                    <!-- How did they find us -->
                                    <div class="space-y-2">
                                        <label for="como_nos_encontro" class="block text-sm font-medium text-slate-300">
                                            ¿Cómo nos encontraste?
                                        </label>
                                        <select
                                            id="como_nos_encontro"
                                            name="como_nos_encontro"
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm"
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
                                    <div class="space-y-2">
                                        <label for="medio_contacto" class="block text-sm font-medium text-slate-300">
                                            Medio de Contacto Preferido <span class="text-blue-400">*</span>
                                        </label>
                                        <select
                                            id="medio_contacto"
                                            name="medio_contacto"
                                            required
                                            class="form-input-dark w-full px-4 py-3 rounded-xl text-sm @error('medio_contacto') border-red-500/70 @enderror"
                                        >
                                            <option value="" disabled {{ old('medio_contacto') ? '' : 'selected' }}>¿Cómo prefieres que te contactemos?</option>
                                            <option value="email" {{ old('medio_contacto') == 'email' ? 'selected' : '' }}>📧 Correo Electrónico</option>
                                            <option value="whatsapp" {{ old('medio_contacto') == 'whatsapp' ? 'selected' : '' }}>💬 WhatsApp</option>
                                            <option value="llamada" {{ old('medio_contacto') == 'llamada' ? 'selected' : '' }}>📞 Llamada Telefónica</option>
                                            <option value="videollamada" {{ old('medio_contacto') == 'videollamada' ? 'selected' : '' }}>🎥 Videollamada (Zoom / Meet)</option>
                                        </select>
                                        @error('medio_contacto')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Additional Comments -->
                                <div class="space-y-2">
                                    <label for="comentarios" class="block text-sm font-medium text-slate-300">
                                        Comentarios Adicionales
                                    </label>
                                    <textarea
                                        id="comentarios"
                                        name="comentarios"
                                        rows="3"
                                        placeholder="¿Hay algo más que quieras que sepamos? Dudas, restricciones técnicas, integraciones requeridas..."
                                        class="form-input-dark w-full px-4 py-3 rounded-xl text-sm resize-none"
                                    >{{ old('comentarios') }}</textarea>
                                </div>

                                <!-- Privacy Consent -->
                                <div class="flex items-start gap-3">
                                    <label class="cursor-pointer flex items-start gap-3 group">
                                        <input
                                            type="checkbox"
                                            name="acepta_privacidad"
                                            value="1"
                                            required
                                            {{ old('acepta_privacidad') ? 'checked' : '' }}
                                            class="sr-only peer"
                                        >
                                        <div class="mt-0.5 w-5 h-5 rounded-md border-2 border-slate-600 bg-slate-800/50 flex-shrink-0 flex items-center justify-center transition-all duration-200 peer-checked:border-blue-400 peer-checked:bg-blue-500/20">
                                            <svg class="w-3 h-3 text-blue-400 opacity-0 group-has-[:checked]:opacity-100 transition-opacity duration-200" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-slate-400 leading-relaxed">
                                            Acepto que SQ Smart Solutions procese mis datos para responder a esta solicitud.
                                            La información proporcionada es confidencial y no será compartida con terceros.
                                        </span>
                                    </label>
                                </div>
                                @error('acepta_privacidad')
                                    <p class="text-red-400 text-xs -mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-2">
                                <button
                                    type="submit"
                                    class="group relative w-full sm:w-auto px-10 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-base"
                                >
                                    <span class="relative z-10 flex items-center justify-center gap-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                        </svg>
                                        Enviar Solicitud de Proyecto
                                    </span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-400 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </button>
                                <p class="text-slate-500 text-xs mt-3">
                                    Te contactaremos en un plazo de 24–48 horas hábiles.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Info Cards -->
                <div class="grid sm:grid-cols-3 gap-6 mt-12">
                    <div class="group card-hover p-6 bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-2xl border border-slate-700/40 text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-semibold mb-2">Respuesta Rápida</h4>
                        <p class="text-slate-400 text-sm">Te respondemos en 24–48 horas hábiles con una propuesta inicial.</p>
                    </div>

                    <div class="group card-hover p-6 bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-2xl border border-slate-700/40 text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-semibold mb-2">Sin Compromiso</h4>
                        <p class="text-slate-400 text-sm">La consulta inicial es completamente gratuita y sin compromiso de contratación.</p>
                    </div>

                    <div class="group card-hover p-6 bg-gradient-to-br from-slate-800/60 to-slate-900/60 backdrop-blur-sm rounded-2xl border border-slate-700/40 text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-violet-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-white font-semibold mb-2">Equipo Experto</h4>
                        <p class="text-slate-400 text-sm">Más de 50 proyectos entregados con 100% de satisfacción en cada cliente.</p>
                    </div>
                </div>
            </main>

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
                            <p class="text-slate-400 text-sm">© {{ date('Y') }} SQ Smart Solutions. Todos los derechos reservados.</p>
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
        </script>

    </body>
</html>
