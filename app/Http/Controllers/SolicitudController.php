<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Show the project request form.
     */
    public function create()
    {
        return view('contacto');
    }

    /**
     * Store a new project request submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'           => ['required', 'string', 'max:255'],
            'empresa'          => ['nullable', 'string', 'max:255'],
            'email'            => ['required', 'email', 'max:255'],
            'telefono'         => ['required', 'string', 'max:30'],
            'tipo_proyecto'    => ['required', 'string', 'in:dashboard,web,base_datos,appsheet,business_intelligence,consultoria,otro'],
            'tiempo_estimado'  => ['required', 'string', 'in:urgente,1_mes,1_3_meses,3_6_meses,flexible'],
            'presupuesto'      => ['nullable', 'string', 'in:menos_5k,5k_15k,15k_30k,mas_30k'],
            'descripcion'      => ['required', 'string', 'min:30', 'max:3000'],
            'tecnologias'      => ['nullable', 'array'],
            'tecnologias.*'    => ['string', 'max:100'],
            'como_nos_encontro'=> ['nullable', 'string', 'in:google,redes_sociales,recomendacion,linkedin,evento,otro'],
            'medio_contacto'   => ['required', 'string', 'in:email,whatsapp,llamada,videollamada'],
            'comentarios'      => ['nullable', 'string', 'max:1000'],
            'acepta_privacidad'=> ['required', 'accepted'],
        ], [
            'nombre.required'           => 'El nombre completo es obligatorio.',
            'email.required'            => 'El correo electrónico es obligatorio.',
            'email.email'               => 'Por favor ingresa un correo electrónico válido.',
            'telefono.required'         => 'El teléfono o WhatsApp es obligatorio.',
            'tipo_proyecto.required'    => 'Por favor selecciona el tipo de proyecto.',
            'tiempo_estimado.required'  => 'Por favor indica el tiempo estimado.',
            'descripcion.required'      => 'La descripción del proyecto es obligatoria.',
            'descripcion.min'           => 'La descripción debe tener al menos 30 caracteres.',
            'medio_contacto.required'   => 'Selecciona un medio de contacto preferido.',
            'acepta_privacidad.required'=> 'Debes aceptar la política de privacidad para continuar.',
            'acepta_privacidad.accepted'=> 'Debes aceptar la política de privacidad para continuar.',
        ]);

        // Store the request in the session for now (no DB dependency required at minimum).
        // In a future iteration this data can be persisted via a Solicitud model.
        session()->flash(
            'success',
            "¡Gracias, {$validated['nombre']}! Hemos recibido tu solicitud y nos pondremos en contacto contigo pronto a través de {$this->medioLabel($validated['medio_contacto'])}."
        );

        return redirect()->route('solicitud.create');
    }

    /**
     * Translate a contact-method key into a human-readable Spanish label
     * used in the success flash message shown to the client after form submission.
     *
     * @param  string  $medio  One of: email, whatsapp, llamada, videollamada
     * @return string          Spanish label for the given contact method key
     */
    private function medioLabel(string $medio): string
    {
        return match ($medio) {
            'email'       => 'correo electrónico',
            'whatsapp'    => 'WhatsApp',
            'llamada'     => 'llamada telefónica',
            'videollamada'=> 'videollamada',
            default       => $medio,
        };
    }
}
