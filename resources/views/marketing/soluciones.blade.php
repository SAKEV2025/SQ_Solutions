<section id="soluciones" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
    <div class="reveal max-w-3xl">
        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#7928ca] dark:text-[#fbb034]">Qué podemos construir</p>
        <h2 class="font-display mt-4 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Una solución para el trabajo que necesitas resolver.</h2>
        <p class="mt-4 text-lg leading-8 text-slate-600">Herramientas modulares y hechas a tu medida para eliminar la fricción que hoy frena a tu equipo.</p>
    </div>

    @php
        $soluciones = [
            [
                'title' => 'CRM y seguimiento comercial',
                'badge' => 'Ventas & Cierre',
                'icon_color' => 'bg-violet-100 text-[#7928ca] dark:bg-violet-950/80 dark:text-[#fbb034]',
                'icon_path' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                'problem' => 'Cuando los clientes y pendientes están dispersos en chats de WhatsApp y hojas de cálculo desactualizadas.',
                'deliverable' => 'Sistema con prospectos, etapas de embudo, responsables asignados e historial completo de cotizaciones.'
            ],
            [
                'title' => 'Intranets y portales internos',
                'badge' => 'Colaboración',
                'icon_color' => 'bg-amber-100 text-[#ff6b35] dark:bg-amber-950/80 dark:text-[#ff6b35]',
                'icon_path' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'problem' => 'Cuando tu personal pierde tiempo buscando políticas, formatos, accesos o solicitando permisos por correo.',
                'deliverable' => 'Portal corporativo con repositorio documental, solicitudes con flujo de visto bueno y roles por área.'
            ],
            [
                'title' => 'Automatización de tareas',
                'badge' => 'Eficiencia Operativa',
                'icon_color' => 'bg-pink-100 text-[#d926a9] dark:bg-pink-950/80 dark:text-[#d926a9]',
                'icon_path' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'problem' => 'Cuando copiar, validar datos, generar facturas o preparar archivos consume horas valiosas todos los días.',
                'deliverable' => 'Flujos automáticos que procesan y validan información sin intervención humana ni margen de error.'
            ],
            [
                'title' => 'Integración de información',
                'badge' => 'Datos Conectados',
                'icon_color' => 'bg-emerald-100 text-emerald-600 dark:bg-emerald-950/80 dark:text-emerald-400',
                'icon_path' => 'M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                'problem' => 'Cuando necesitas cruzar datos entre tu ERP, punto de venta, inventario y bancos sin compatibilidad.',
                'deliverable' => 'Conexiones vía API e importaciones automatizadas con validación, limpieza y consolidación segura.'
            ],
            [
                'title' => 'Tableros e indicadores',
                'badge' => 'Toma de Decisiones',
                'icon_color' => 'bg-sky-100 text-sky-600 dark:bg-sky-950/80 dark:text-sky-300',
                'icon_path' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                'problem' => 'Cuando los reportes gerenciales llegan tarde a la junta o es un calvario comparar periodos anteriores.',
                'deliverable' => 'Dashboard ejecutivo interactivo con métricas clave en vivo, filtros dinámicos y reportes descargables.'
            ],
            [
                'title' => 'Aplicaciones web a medida',
                'badge' => 'Desarrollo Especial',
                'icon_color' => 'bg-indigo-100 text-indigo-600 dark:bg-indigo-950/80 dark:text-indigo-300',
                'icon_path' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                'problem' => 'Cuando tu operación tiene reglas de negocio únicas que ningún software comercial estándar puede cubrir.',
                'deliverable' => 'Software web completo diseñado desde cero con formularios, permisos, catálogos y arquitectura escalable.'
            ],
        ];
    @endphp

    <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($soluciones as $solucion)
            <article class="reveal card-rise flex flex-col justify-between rounded-[2rem] border border-slate-900/10 bg-white/80 p-7 shadow-sm">
                <div>
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl {{ $solucion['icon_color'] }}">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $solucion['icon_path'] }}" />
                            </svg>
                        </div>
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">
                            {{ $solucion['badge'] }}
                        </span>
                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-slate-950">{{ $solucion['title'] }}</h3>
                    <p class="mt-3 text-sm leading-6 text-slate-600">{{ $solucion['problem'] }}</p>
                </div>

                <div class="mt-6 rounded-2xl border border-slate-200/80 bg-slate-50/70 p-4 dark:border-slate-800 dark:bg-slate-900/50">
                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#7928ca] dark:text-[#fbb034]">Entregable concreto</p>
                    <p class="mt-1 text-xs leading-5 text-slate-700 dark:text-slate-300">{{ $solucion['deliverable'] }}</p>
                </div>
            </article>
        @endforeach
    </div>

    <div class="reveal mt-8 flex flex-col items-center justify-between gap-4 rounded-2xl border border-slate-900/10 bg-white/60 px-6 py-4 sm:flex-row dark:border-slate-800 dark:bg-slate-900/40">
        <p class="text-sm text-slate-600 dark:text-slate-400">¿Tienes un reto distinto? El alcance y las integraciones se adaptan exactamente a tu flujo.</p>
        <a href="{{ route('solicitud.create') }}" class="inline-flex shrink-0 items-center gap-1.5 text-sm font-bold text-[#7928ca] transition hover:text-[#903fe6] dark:text-[#fbb034]">
            Platícanos tu requerimiento
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>
