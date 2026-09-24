@extends('layouts.marketing')
@section('content')

                <section class="mx-auto max-w-7xl px-4 pb-16 pt-10 sm:px-6 lg:px-8 lg:pb-24 lg:pt-16">
                    <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
                        <div class="reveal space-y-8">

                            <div class="space-y-5">
                                <h1 class="font-display max-w-3xl text-5xl font-semibold leading-[0.95] tracking-tight text-slate-950 sm:text-6xl lg:text-7xl">
                                    Software que conecta ideas, equipos y <span class="text-accent-gradient">resultados</span>.
                                </h1>
                                <p class="max-w-2xl text-lg leading-8 text-slate-600 sm:text-xl">
                                    Creamos aplicaciones web, automatizaciones y herramientas de datos adaptadas a la forma en que trabaja cada organización.
                                </p>
                            </div>

                            <div class="flex flex-col gap-4 sm:flex-row">
                                <a href="{{ route('solicitud.create') }}" class="btn-shimmer inline-flex items-center justify-center rounded-full bg-slate-900 px-7 py-4 text-sm font-semibold text-white shadow-xl shadow-slate-900/15 transition hover:-translate-y-0.5 hover:bg-slate-800">
                                    Quiero una propuesta
                                </a>
                                <a href="#soluciones" class="inline-flex items-center justify-center rounded-full border border-slate-900/10 bg-white px-7 py-4 text-sm font-semibold text-slate-800 transition hover:-translate-y-0.5 hover:border-slate-900/20 hover:bg-slate-50">
                                    Explorar soluciones
                                </a>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-3">
                                <div class="glass-panel rounded-3xl p-5">
                                    <p class="text-sm font-medium text-slate-500">Visibilidad</p>
                                    <p class="mt-2 text-2xl font-semibold text-slate-950">Datos claros</p>
                                    <p class="mt-1 text-sm text-slate-600">Indicadores para dirigir con contexto.</p>
                                </div>
                                <div class="glass-panel rounded-3xl p-5">
                                    <p class="text-sm font-medium text-slate-500">Automatización</p>
                                    <p class="mt-2 text-2xl font-semibold text-slate-950">Menos tareas</p>
                                    <p class="mt-1 text-sm text-slate-600">Menos carga operativa manual.</p>
                                </div>
                                <div class="glass-panel rounded-3xl p-5">
                                    <p class="text-sm font-medium text-slate-500">Decisión</p>
                                    <p class="mt-2 text-2xl font-semibold text-slate-950">Mejor contexto</p>
                                    <p class="mt-1 text-sm text-slate-600">Control de negocio sin esperar reportes tardíos.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative lg:pl-8" aria-label="Consola de control y soluciones conectadas">
                            <div class="glass-panel relative overflow-hidden rounded-[2.5rem] p-6 sm:p-8 border border-slate-900/10 dark:border-white/10 shadow-2xl">
                                <div class="absolute -right-14 -top-14 h-56 w-56 rounded-full bg-[#fbb034]/20 blur-3xl pointer-events-none"></div>
                                <div class="absolute -bottom-16 -left-10 h-56 w-56 rounded-full bg-[#7928ca]/25 blur-3xl pointer-events-none"></div>

                                <!-- Encabezado de la Consola -->
                                <div class="relative flex items-center justify-between border-b border-slate-200/80 pb-4 dark:border-slate-800">
                                    <div class="flex items-center gap-2.5">
                                        <span class="flex h-3 w-3 relative">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                                        </span>
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-wider text-slate-800 dark:text-slate-200">Ecosistema Activo</p>
                                            <p class="text-[11px] text-slate-500">Conexión en tiempo real</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-violet-100 px-3 py-1 text-[11px] font-semibold text-violet-800 dark:bg-violet-950/70 dark:text-violet-300">
                                        SAKEV Core
                                    </span>
                                </div>

                                <!-- Grid de Componentes Dinámicos -->
                                <div class="relative mt-6 grid grid-cols-2 gap-3.5">
                                    <div class="group rounded-2xl border border-slate-200/80 bg-white/90 p-4 transition-all duration-300 hover:border-[#7928ca]/40 hover:shadow-md dark:border-slate-800 dark:bg-slate-900/80">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-violet-100 text-[#7928ca] dark:bg-violet-950/80 dark:text-[#fbb034]">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </div>
                                        <p class="mt-3 text-sm font-bold text-slate-900 dark:text-white">Aplicaciones Web</p>
                                        <p class="mt-1 text-xs text-slate-500">Hechas para el flujo real de tu equipo.</p>
                                    </div>

                                    <div class="group rounded-2xl border border-slate-200/80 bg-white/90 p-4 transition-all duration-300 hover:border-[#ff6b35]/40 hover:shadow-md dark:border-slate-800 dark:bg-slate-900/80">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-amber-100 text-[#ff6b35] dark:bg-amber-950/80 dark:text-[#ff6b35]">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                        </div>
                                        <p class="mt-3 text-sm font-bold text-slate-900 dark:text-white">Automatización</p>
                                        <p class="mt-1 text-xs text-slate-500">Cero captura repetitiva o tareas manuales.</p>
                                    </div>

                                    <div class="group rounded-2xl border border-slate-200/80 bg-white/90 p-4 transition-all duration-300 hover:border-[#d926a9]/40 hover:shadow-md dark:border-slate-800 dark:bg-slate-900/80">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-pink-100 text-[#d926a9] dark:bg-pink-950/80 dark:text-[#d926a9]">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                        </div>
                                        <p class="mt-3 text-sm font-bold text-slate-900 dark:text-white">Datos y BI</p>
                                        <p class="mt-1 text-xs text-slate-500">Indicadores unificados en una vista.</p>
                                    </div>

                                    <div class="group rounded-2xl border border-slate-200/80 bg-white/90 p-4 transition-all duration-300 hover:border-emerald-500/40 hover:shadow-md dark:border-slate-800 dark:bg-slate-900/80">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-950/80 dark:text-emerald-400">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                        </div>
                                        <p class="mt-3 text-sm font-bold text-slate-900 dark:text-white">Seguimiento</p>
                                        <p class="mt-1 text-xs text-slate-500">Control de estados, tiempos y roles.</p>
                                    </div>
                                </div>

                                <!-- Tarjeta de Resumen en Vivo -->
                                <div class="relative mt-4 rounded-2xl bg-[#160f24] border border-[#2f1d47] p-5 text-white">
                                    <div class="flex items-center justify-between">
                                        <img src="{{ asset('landing/LOGO_SAKEV_LETRA.png') }}" alt="SAKEV" class="h-7 w-auto object-contain rounded-md" />
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-2.5 py-1 text-[11px] text-[#fbc64d] font-semibold">
                                            <span class="h-1.5 w-1.5 rounded-full bg-[#fbc64d]"></span>
                                            100% Personalizable
                                        </span>
                                    </div>
                                    <p class="mt-2 text-xs text-[#cbbcd9]">Diseño a la medida de tu operación: sin sobrecostos de licencias genéricas ni funciones que nadie usa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @include('marketing.soluciones')
                @include('marketing.ejemplos')
                <section id="propuesta" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="reveal mb-12 max-w-3xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#7928ca] dark:text-[#fbb034]">Propuesta de valor</p>
                        <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Soluciones digitales construidas alrededor de cada reto.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">Desde una aplicación interna hasta un tablero de indicadores: diseñamos herramientas que reúnen información, simplifican tareas y facilitan el seguimiento.</p>
                    </div>

                    <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#160f24] text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Datos accesibles</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Tableros y reportes que muestran el estado del negocio en una sola lectura.</p>
                        </article>

                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#7928ca] text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m4-4H8" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Automatización útil</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Flujos que eliminan captura repetitiva, errores y tiempos muertos.</p>
                        </article>

                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#ff6b35] text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 1.34-4 3s1.79 3 4 3 4 1.34 4 3-1.79 3-4 3m0-14v14" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Integración de datos</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Conectamos fuentes y transformamos información dispersa en vistas útiles para analizar y actuar.</p>
                        </article>

                        <article class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#d926a9] text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" /></svg>
                            </div>
                            <h3 class="mt-5 text-xl font-semibold text-slate-950">Escala ordenada</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Soluciones diseñadas para crecer con la operación y no romper procesos existentes.</p>
                        </article>
                    </div>
                </section>

                <section id="impacto" class="bg-slate-950 py-16 text-white lg:py-24 relative overflow-hidden">
                    <div class="absolute -right-20 -top-20 h-96 w-96 rounded-full bg-[#7928ca]/20 blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-20 -left-20 h-96 w-96 rounded-full bg-[#ff6b35]/15 blur-3xl pointer-events-none"></div>

                    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
                            <div class="reveal space-y-6">
                                <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-3.5 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-[#fbc64d]">
                                    Impacto cuantificable
                                </span>
                                <h2 class="font-display text-4xl font-semibold tracking-tight sm:text-5xl leading-tight">
                                    De la fricción cotidiana al orden operativo medible.
                                </h2>
                                <p class="max-w-xl text-lg leading-8 text-slate-300">
                                    No implementamos software para sumar complejidad. Desarrollamos herramientas que resuelven cuellos de botella específicos y devuelven tiempo a tu equipo directivo y operativo.
                                </p>
                                <div class="pt-2">
                                    <a href="{{ route('solicitud.create') }}" class="inline-flex items-center gap-2 font-semibold text-[#fbc64d] transition hover:text-[#ffd269]">
                                        <span>Solicitar evaluación de viabilidad</span>
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/10 hover:border-white/20">
                                    <div class="flex items-center justify-between text-xs text-rose-300">
                                        <span class="font-medium">Antes: Procesos con fricción</span>
                                        <span class="rounded bg-rose-500/20 px-2 py-0.5 font-mono text-[10px] text-rose-300">Caos</span>
                                    </div>
                                    <p class="mt-4 text-2xl font-bold text-white">Vista unificada</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-300">Consolidamos información operativa, comercial y financiera en un solo panel de verdad compartida.</p>
                                </div>

                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/10 hover:border-white/20">
                                    <div class="flex items-center justify-between text-xs text-amber-300">
                                        <span class="font-medium">Antes: Reportes manuales lentos</span>
                                        <span class="rounded bg-amber-500/20 px-2 py-0.5 font-mono text-[10px] text-amber-300">-80% tiempo</span>
                                    </div>
                                    <p class="mt-4 text-2xl font-bold text-white">Indicadores al día</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-300">Datos procesados en vivo para anticipar decisiones clave en lugar de revisar lo que pasó el mes anterior.</p>
                                </div>

                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/10 hover:border-white/20">
                                    <div class="flex items-center justify-between text-xs text-purple-300">
                                        <span class="font-medium">Antes: Carga repetitiva</span>
                                        <span class="rounded bg-purple-500/20 px-2 py-0.5 font-mono text-[10px] text-purple-300">Automatizado</span>
                                    </div>
                                    <p class="mt-4 text-2xl font-bold text-white">Cero captura manual</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-300">Validaciones automáticas y flujos programados que reducen el error humano y aceleran los tiempos de respuesta.</p>
                                </div>

                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/10 hover:border-white/20">
                                    <div class="flex items-center justify-between text-xs text-emerald-300">
                                        <span class="font-medium">Antes: Decisión intuitiva</span>
                                        <span class="rounded bg-emerald-500/20 px-2 py-0.5 font-mono text-[10px] text-emerald-300">Contexto</span>
                                    </div>
                                    <p class="mt-4 text-2xl font-bold text-white">Claridad ejecutiva</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-300">Cada directivo y coordinador cuenta con filtros claros, trazabilidad histórica y estado de entregas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="metodo" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="reveal mb-14 max-w-3xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#7928ca] dark:text-[#fbb034]">Método de trabajo</p>
                        <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Un proceso ágil, consultivo y orientado a adopción real.</h2>
                        <p class="mt-4 text-lg leading-8 text-slate-600">Acompañamos a tu empresa desde el diagnóstico del dolor hasta la capacitación y puesta en marcha efectiva.</p>
                    </div>

                    <!-- Línea de proceso con conectores -->
                    <div class="relative grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Paso 01 -->
                        <div class="reveal card-rise relative flex flex-col justify-between rounded-[2rem] border border-slate-900/10 bg-white/80 p-7 shadow-sm">
                            <div>
                                <div class="flex items-center justify-between">
                                    <span class="font-display text-4xl font-bold text-[#7928ca]/20 dark:text-[#fbb034]/25">01</span>
                                    <span class="h-8 w-8 rounded-full bg-violet-100 flex items-center justify-center text-[#7928ca] dark:bg-violet-950/80 dark:text-[#fbb034]">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                    </span>
                                </div>
                                <h3 class="mt-4 text-xl font-bold text-slate-950">Diagnóstico</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Mapeamos procesos, cuellos de botella e información dispersa para identificar dónde se pierde tiempo y dinero.</p>
                            </div>
                            <div class="mt-6 border-t border-slate-100 pt-3 dark:border-slate-800">
                                <span class="text-[11px] font-semibold text-slate-400">Entregable: Mapeo y alcance</span>
                            </div>
                        </div>

                        <!-- Paso 02 -->
                        <div class="reveal card-rise relative flex flex-col justify-between rounded-[2rem] border border-slate-900/10 bg-white/80 p-7 shadow-sm">
                            <div>
                                <div class="flex items-center justify-between">
                                    <span class="font-display text-4xl font-bold text-[#ff6b35]/25">02</span>
                                    <span class="h-8 w-8 rounded-full bg-amber-100 flex items-center justify-center text-[#ff6b35] dark:bg-amber-950/80 dark:text-[#ff6b35]">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/></svg>
                                    </span>
                                </div>
                                <h3 class="mt-4 text-xl font-bold text-slate-950">Arquitectura</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Diseñamos la estructura de base de datos, flujos de trabajo y pantallas para asegurar facilidad de uso inmediato.</p>
                            </div>
                            <div class="mt-6 border-t border-slate-100 pt-3 dark:border-slate-800">
                                <span class="text-[11px] font-semibold text-slate-400">Entregable: Prototipo funcional</span>
                            </div>
                        </div>

                        <!-- Paso 03 -->
                        <div class="reveal card-rise relative flex flex-col justify-between rounded-[2rem] border border-slate-900/10 bg-white/80 p-7 shadow-sm">
                            <div>
                                <div class="flex items-center justify-between">
                                    <span class="font-display text-4xl font-bold text-[#d926a9]/25">03</span>
                                    <span class="h-8 w-8 rounded-full bg-pink-100 flex items-center justify-center text-[#d926a9] dark:bg-pink-950/80 dark:text-[#d926a9]">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    </span>
                                </div>
                                <h3 class="mt-4 text-xl font-bold text-slate-950">Implementación</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Desarrollo iterativo de la solución, integrando fuentes de datos, reglas de validación y paneles de control.</p>
                            </div>
                            <div class="mt-6 border-t border-slate-100 pt-3 dark:border-slate-800">
                                <span class="text-[11px] font-semibold text-slate-400">Entregable: Software operativo</span>
                            </div>
                        </div>

                        <!-- Paso 04 -->
                        <div class="reveal card-rise relative flex flex-col justify-between rounded-[2rem] border border-slate-900/10 bg-white/80 p-7 shadow-sm">
                            <div>
                                <div class="flex items-center justify-between">
                                    <span class="font-display text-4xl font-bold text-emerald-500/25">04</span>
                                    <span class="h-8 w-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 dark:bg-emerald-950/80 dark:text-emerald-400">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </span>
                                </div>
                                <h3 class="mt-4 text-xl font-bold text-slate-950">Adopción</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Capacitamos a los usuarios, resolvemos dudas operativas y brindamos soporte para garantizar que la adopción sea duradera.</p>
                            </div>
                            <div class="mt-6 border-t border-slate-100 pt-3 dark:border-slate-800">
                                <span class="text-[11px] font-semibold text-slate-400">Entregable: Equipo operando</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-stretch">
                        <div class="reveal rounded-[2rem] bg-slate-900 p-8 text-white lg:p-10">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#fbc64d]">Sectores que encajan</p>
                            <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">Donde hay operación, hay oportunidad de ordenar y crecer.</h2>
                            <p class="mt-4 max-w-xl text-lg leading-8 text-slate-300">La propuesta se adapta naturalmente a empresas con venta, seguimiento, aprobaciones, registros o indicadores que hoy viven dispersos en hojas, correos y sistemas inconexos.</p>
                            <div class="mt-8 flex flex-wrap gap-3">
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Servicios</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Distribución</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Retail</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Manufactura</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Construcción</span>
                                <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white">Comercial</span>
                            </div>
                        </div>

                        <div class="reveal grid gap-5 sm:grid-cols-2">
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-[#7928ca] dark:text-[#fbb034]">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Reducir caos operativo</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Eliminar retrabajo, duplicidad y seguimiento manual.</p>
                            </div>
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-[#ff6b35]">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Ver antes de reaccionar</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Anticipar desvíos, atrasos y oportunidades.</p>
                            </div>
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-[#d926a9]">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Unificar información</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Una sola fuente para operación, dirección y comercial.</p>
                            </div>
                            <div class="card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/85 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-[#7928ca]">Prioridad</p>
                                <h3 class="mt-4 text-xl font-semibold text-slate-950">Escalar sin desorden</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-600">Crecimiento con estructura, no con parches.</p>
                            </div>
                        </div>
                    </div>
                </section>

                @include('marketing.acompanamiento')
                <section id="contacto" class="border-t border-slate-900/5 bg-white/70 py-16 lg:py-24">
                    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                        <div class="reveal rounded-[2rem] bg-slate-950 p-8 text-white shadow-2xl shadow-slate-950/20 lg:p-12">
                            <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                                <div>
                                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#fbc64d]">Contacto</p>
                                    <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">Cuéntanos qué quieres construir o mejorar.</h2>
                                    <p class="mt-4 max-w-2xl text-lg leading-8 text-slate-300">Podemos ayudarte a explorar una aplicación, automatización, integración de datos o tablero. Empezamos por entender tu necesidad.</p>
                                </div>

                                <div class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-slate-300">Canales de contacto</p>
                                    <div class="mt-5 grid gap-3">
                                        <a href="mailto:contacto@sakev.com.mx" class="rounded-2xl bg-white px-4 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">contacto@sakev.com.mx</a>
                                        <a href="https://wa.me/5215536799199" target="_blank" rel="noopener noreferrer" class="rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-semibold text-white transition hover:bg-white/10">WhatsApp comercial</a>
                                        <a href="{{ url('/contacto') }}" class="rounded-2xl bg-[#ff6b35] px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-[#ff6b35]/25 transition hover:bg-[#e85a26] hover:-translate-y-0.5">Cuéntanos tu proyecto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection
