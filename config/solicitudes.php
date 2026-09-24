<?php

return [
    'notify_email' => env('SOLICITUD_NOTIFY_EMAIL'),
    'privacy_version' => '2026-09-24',
    'tipos' => [
        'crm' => 'Organizar clientes y ventas',
        'automatizacion' => 'Automatizar tareas repetitivas',
        'integracion' => 'Centralizar información',
        'sistema_interno' => 'Crear un sistema interno',
        'dashboard' => 'Consultar indicadores y reportes',
        'web' => 'Crear una aplicación web',
        'consultoria' => 'Necesito orientación',
        'otro' => 'Otra necesidad',
    ],
    // Keep requests from already-open versions of the old form compatible.
    'legacy_tipos' => ['base_datos', 'appsheet', 'business_intelligence'],
    'plazos' => [
        'flexible' => 'Por definir / flexible',
        'urgente' => 'Menos de 2 semanas (sujeto a evaluación)',
        '1_mes' => 'Aproximadamente 1 mes',
        '1_3_meses' => 'De 1 a 3 meses',
        '3_6_meses' => 'De 3 a 6 meses',
    ],
    'medios' => ['email' => 'Correo electrónico', 'whatsapp' => 'WhatsApp', 'llamada' => 'Llamada', 'videollamada' => 'Videollamada'],
    'tecnologias' => ['Power BI', 'Looker Studio', 'AppSheet', 'SQL / MySQL', 'Laravel', 'React', 'Tailwind CSS', 'Python', 'Google Sheets', 'Power Automate', 'No tengo preferencia'],
];
