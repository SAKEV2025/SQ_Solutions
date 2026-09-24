<h1>Nueva solicitud #{{ $solicitud->id }}</h1>
<p>Nombre: {{ $solicitud->nombre }}</p>
<p>Empresa: {{ $solicitud->empresa ?: 'No indicada' }}</p>
<p>Correo: {{ $solicitud->email }}</p>
<p>Teléfono: {{ $solicitud->telefono ?: 'No indicado' }}</p>
<p>Medio preferido: {{ config('solicitudes.medios')[$solicitud->medio_contacto] }}</p>
<p>Necesidad: {{ config('solicitudes.tipos')[$solicitud->tipo_proyecto] ?? $solicitud->tipo_proyecto }}</p>
<p>Plazo: {{ config('solicitudes.plazos')[$solicitud->tiempo_estimado] ?? 'Por definir' }}</p>
<p style="white-space: pre-wrap">{{ $solicitud->descripcion }}</p>
<p>Tecnologías: {{ implode(', ', $solicitud->tecnologias ?? []) }}</p>
<p style="white-space: pre-wrap">{{ $solicitud->comentarios }}</p>
