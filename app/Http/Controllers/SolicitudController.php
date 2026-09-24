<?php

namespace App\Http\Controllers;

use App\Mail\NuevaSolicitud;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class SolicitudController extends Controller
{
    public function create()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'empresa' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefono' => ['required_if:medio_contacto,whatsapp,llamada', 'nullable', 'string', 'max:30'],
            'tipo_proyecto' => ['required', 'string', Rule::in(array_merge(array_keys(config('solicitudes.tipos')), config('solicitudes.legacy_tipos')))],
            'tiempo_estimado' => ['nullable', 'string', Rule::in(array_keys(config('solicitudes.plazos')))],
            'descripcion' => ['required', 'string', 'min:30', 'max:3000'],
            'tecnologias' => ['nullable', 'array', 'max:11'],
            'tecnologias.*' => ['string', 'max:100'],
            'como_nos_encontro' => ['nullable', 'string', 'in:google,redes_sociales,recomendacion,linkedin,evento,otro'],
            'medio_contacto' => ['required', 'string', Rule::in(array_keys(config('solicitudes.medios')))],
            'comentarios' => ['nullable', 'string', 'max:1000'],
            'acepta_privacidad' => ['required', 'accepted'],
        ], [
            'required' => 'El campo :attribute es obligatorio.',
            'string' => 'El campo :attribute debe ser texto.',
            'max' => 'El campo :attribute supera el máximo permitido (:max).',
            'in' => 'Selecciona una opción válida para :attribute.',
            'array' => 'Selecciona opciones válidas para :attribute.',
            'email.email' => 'Ingresa un correo electrónico válido.',
            'telefono.required_if' => 'Indica tu teléfono para recibir una llamada o un WhatsApp.',
            'descripcion.min' => 'Describe tu necesidad con al menos 30 caracteres.',
            'acepta_privacidad.accepted' => 'Debes aceptar el uso de tus datos para enviar la solicitud.',
        ], [
            'nombre' => 'nombre', 'email' => 'correo electrónico', 'telefono' => 'teléfono',
            'tipo_proyecto' => 'necesidad', 'medio_contacto' => 'medio de contacto',
            'descripcion' => 'descripción', 'acepta_privacidad' => 'aceptación del uso de datos',
            'tiempo_estimado' => 'plazo', 'tecnologias' => 'tecnologías',
        ]);

        $solicitud = Solicitud::create([
            ...Arr::except($validated, ['acepta_privacidad']),
            'privacy_version' => config('solicitudes.privacy_version'),
            'consented_at' => now(),
        ]);

        // Save first: an unavailable mail server must never discard a lead.
        if ($recipient = config('solicitudes.notify_email')) {
            try {
                Mail::to($recipient)->send(new NuevaSolicitud($solicitud));
            } catch (\Throwable $exception) {
                // Do not log contact details, message contents, or SMTP credentials.
                Log::warning('Solicitud registrada; aviso por correo no enviado.', ['solicitud_id' => $solicitud->id]);
            }
        }

        return redirect()->route('solicitud.create')->with(
            'success',
            "Gracias, {$solicitud->nombre}. Tu solicitud quedó registrada con el folio {$solicitud->id}. El medio de contacto que elegiste es ".config('solicitudes.medios')[$solicitud->medio_contacto].'.'
        );
    }
}
