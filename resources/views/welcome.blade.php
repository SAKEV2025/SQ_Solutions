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
                                <a href="{{ route('solicitud.create') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-7 py-4 text-sm font-semibold text-white shadow-xl shadow-slate-900/15 transition hover:-translate-y-0.5 hover:bg-slate-800">
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

                        <div class="relative lg:pl-8" aria-label="Áreas de trabajo conectadas por soluciones digitales">
                            <div class="glass-panel relative overflow-hidden rounded-[2rem] p-7 sm:p-10">
                                <div class="absolute -right-14 -top-14 h-48 w-48 rounded-full bg-[#fbb034]/25 blur-3xl"></div>
                                <div class="absolute -bottom-16 -left-10 h-48 w-48 rounded-full bg-[#7928ca]/25 blur-3xl"></div>
                                <p class="relative text-xs font-bold uppercase tracking-[0.25em] text-slate-500">Un ecosistema conectado</p>
                                <div class="relative mt-8 grid grid-cols-2 gap-4">
                                    <div class="rounded-2xl border border-slate-900/10 bg-white/80 p-5">
                                        <span class="text-2xl" aria-hidden="true">◈</span>
                                        <p class="mt-3 font-semibold text-slate-900">Aplicaciones</p>
                                        <p class="mt-1 text-sm text-slate-600">Herramientas hechas a medida.</p>
                                    </div>
                                    <div class="rounded-2xl border border-slate-900/10 bg-white/80 p-5">
                                        <span class="text-2xl" aria-hidden="true">⌁</span>
                                        <p class="mt-3 font-semibold text-slate-900">Automatización</p>
                                        <p class="mt-1 text-sm text-slate-600">Flujos de trabajo más simples.</p>
                                    </div>
                                    <div class="rounded-2xl border border-slate-900/10 bg-white/80 p-5">
                                        <span class="text-2xl" aria-hidden="true">▦</span>
                                        <p class="mt-3 font-semibold text-slate-900">Datos</p>
                                        <p class="mt-1 text-sm text-slate-600">Información fácil de consultar.</p>
                                    </div>
                                    <div class="rounded-2xl border border-slate-900/10 bg-white/80 p-5">
                                        <span class="text-2xl" aria-hidden="true">◎</span>
                                        <p class="mt-3 font-semibold text-slate-900">Seguimiento</p>
                                        <p class="mt-1 text-sm text-slate-600">Visibilidad para cada equipo.</p>
                                    </div>
                                </div>
                                <div class="relative mt-5 rounded-2xl bg-[#160f24] border border-[#2f1d47] px-6 py-5 text-white">
                                    <img src="{{ asset('landing/LOGO_SAKEV_LETRA.png') }}" alt="SAKEV" class="h-8 w-auto object-contain rounded-lg mb-2" />
                                    <p class="mt-1 text-sm text-[#cbbcd9]">Tecnología conectada con necesidades reales.</p>
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

                <section id="impacto" class="bg-slate-950 py-16 text-white lg:py-24">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                            <div class="reveal space-y-5">
                                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#fbc64d]">Impacto esperado</p>
                                <h2 class="font-display text-4xl font-semibold tracking-tight sm:text-5xl">De una necesidad concreta a una herramienta que el equipo pueda usar.</h2>
                                <p class="max-w-xl text-lg leading-8 text-slate-300">Cada solución parte del contexto del cliente. Definimos el alcance, construimos lo necesario y ajustamos la experiencia con quienes la usarán.</p>
                            </div>

                            <div class="grid gap-5 sm:grid-cols-2">
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Procesos con fricción</p>
                                    <p class="mt-3 text-2xl sm:text-3xl font-semibold">Vista unificada</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Información operativa, comercial y directiva consolidada.</p>
                                </div>
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Reportes lentos</p>
                                    <p class="mt-3 text-2xl sm:text-3xl font-semibold">Indicadores útiles</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Indicadores listos para actuar, no solo para documentar.</p>
                                </div>
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Tareas repetitivas</p>
                                    <p class="mt-3 text-2xl sm:text-3xl font-semibold">Menos carga</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Automatizaciónes que liberan tiempo del equipo.</p>
                                </div>
                                <div class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
                                    <p class="text-sm text-slate-300">Decisión intuitiva</p>
                                    <p class="mt-3 text-2xl sm:text-3xl font-semibold">Más claridad</p>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">Cada acción acompa&ntilde;ada de contexto y prioridad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="metodo" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                    <div class="reveal mb-12 max-w-3xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#7928ca] dark:text-[#fbb034]">Método</p>
                        <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Un proceso sencillo, consultivo y orientado a adopción real.</h2>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-4">
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">01</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Diagnóstico</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Identificamos procesos, cuellos de botella y decisiones que hoy dependen de demasiada fricción.</p>
                        </div>
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">02</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Arquitectura</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Definimos una experiencia de uso clara para negocio, sin complejidad innecesaria.</p>
                        </div>
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">03</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Implementación</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Construimos tableros, flujos y herramientas listas para operar.</p>
                        </div>
                        <div class="reveal card-rise rounded-[1.75rem] border border-slate-900/10 bg-white/80 p-6">
                            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-slate-500">04</p>
                            <h3 class="mt-4 text-xl font-semibold text-slate-950">Adopción</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Acompa&ntilde;amos el uso para que el cambio se sostenga en el tiempo.</p>
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
