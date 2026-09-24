@extends('layouts.marketing')
@section('title', 'Uso de tus datos de contacto | SAKEV Solutions')
@section('description', 'Conoce qué información solicita el formulario de SAKEV Solutions y cómo pedir aclaraciones sobre tus datos.')
@section('content')
<section class="mx-auto max-w-3xl px-4 py-16 sm:px-6">
    <h1 class="font-display text-4xl font-semibold text-slate-950">Uso de tus datos de contacto</h1>
    <p class="mt-5 text-slate-600">Información sobre el formulario de SAKEV Solutions. Actualización: 24 de septiembre de 2026.</p>
    <div class="glass-panel mt-8 space-y-7 rounded-3xl p-8 leading-8">
        <div><h2 class="text-xl font-semibold">Qué información solicita el formulario</h2><p>Tu nombre, correo, necesidad y descripción del proyecto, además del medio de contacto preferido. El teléfono es necesario si eliges WhatsApp o llamada. Empresa, plazo, tecnologías y comentarios son opcionales.</p></div>
        <div><h2 class="text-xl font-semibold">Para qué se utiliza</h2><p>Para revisar tu solicitud, contactarte y dar seguimiento a una posible propuesta. La aceptación del formulario corresponde a esa finalidad.</p></div>
        <div><h2 class="text-xl font-semibold">Cómo se registra tu solicitud</h2><p>La información se guarda en el sistema de SAKEV Solutions junto con la fecha de aceptación y la versión de este texto. Puede enviarse una notificación al correo comercial configurado para atender solicitudes.</p></div>
        <div><h2 class="text-xl font-semibold">Preferencias y servicios externos</h2><p>El sitio usa cookies de sesión para el formulario y guarda tu preferencia de tema en el navegador. Si eliges WhatsApp o tu aplicación de correo, continuarás en un servicio externo.</p></div>
        <div><h2 class="text-xl font-semibold">Consultas sobre tu información</h2><p>Escribe a <a class="underline" href="mailto:contacto@sakev.com.mx">contacto@sakev.com.mx</a> para preguntar sobre tus datos o solicitar su corrección o eliminación. Incluye el folio de tu solicitud si lo tienes y evita adjuntar datos sensibles.</p></div>
    </div>
    <a href="{{ route('solicitud.create') }}" class="mt-8 inline-block underline">Volver al formulario</a>
</section>
@endsection
