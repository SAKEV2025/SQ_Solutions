<section id="soluciones" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <p class="text-sm font-semibold uppercase tracking-widest text-slate-600">Qué podemos construir</p>
    <h2 class="font-display mt-4 text-4xl font-semibold text-slate-950">Una solución para el trabajo que necesitas resolver.</h2>
    <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        @foreach ([
            ['CRM y seguimiento comercial', 'Cuando los clientes y pendientes están repartidos entre chats y hojas de cálculo.', 'Entregable: un sistema con prospectos, etapas, responsables e historial de seguimiento.'],
            ['Intranets y portales internos', 'Cuando tu equipo necesita un lugar común para consultar y gestionar información.', 'Entregable: un portal con documentos, solicitudes, avisos y acceso por roles.'],
            ['Automatización de tareas', 'Cuando copiar, validar y preparar archivos consume tiempo todos los días.', 'Entregable: un flujo que procesa información con validaciones y registra el resultado.'],
            ['Integración de información', 'Cuando necesitas reunir datos de distintas herramientas para trabajar con ellos.', 'Entregable: importaciones e integraciones con reglas de limpieza y validación.'],
            ['Tableros e indicadores', 'Cuando los reportes llegan tarde o es difícil comparar resultados.', 'Entregable: un tablero con métricas, filtros y fuentes de información acordadas.'],
            ['Aplicaciones web a medida', 'Cuando tu operación requiere un flujo que las herramientas actuales no cubren.', 'Entregable: una aplicación con formularios, permisos y funciones definidas contigo.'],
        ] as [$title, $problem, $deliverable])
            <article class="card-rise rounded-3xl border border-slate-900/10 bg-white/80 p-6">
                <h3 class="text-xl font-semibold text-slate-950">{{ $title }}</h3>
                <p class="mt-3 text-slate-600">{{ $problem }}</p>
                <p class="mt-4 text-sm leading-7 text-slate-700">{{ $deliverable }}</p>
            </article>
        @endforeach
    </div>
    <p class="mt-6 text-slate-600">El alcance, las integraciones y el acompañamiento se definen para cada proyecto.</p>
</section>
