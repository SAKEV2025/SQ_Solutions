@extends('layouts.marketing')
@section('title', 'Cuéntanos tu proyecto | SAKEV Solutions')
@section('description', 'Describe qué necesitas mejorar. SAKEV Solutions te ayuda a definir una aplicación, automatización o herramienta de datos para tu empresa.')
@section('content')
<section class="mx-auto max-w-3xl px-4 py-12 sm:px-6 lg:py-20">
    <h1 class="font-display text-4xl sm:text-5xl font-semibold text-slate-950">Cuéntanos qué necesitas resolver.</h1>
    <p class="mt-5 text-lg leading-8 text-slate-600">No necesitas conocer la tecnología. Describe cómo trabajas hoy y qué te gustaría mejorar. La conversación inicial es gratuita y sin compromiso.</p>
    <p class="mt-4 text-slate-600">También puedes escribir a <a class="underline" href="mailto:contacto@sakev.com.mx">contacto@sakev.com.mx</a> o por <a class="underline" href="https://wa.me/5215536799199" target="_blank" rel="noopener noreferrer">WhatsApp</a>.</p>

    @if(session('success'))
        <div class="glass-panel mt-8 rounded-2xl p-6" role="status">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="glass-panel mt-8 rounded-2xl p-6" role="alert" tabindex="-1">
            <p class="font-semibold">Revisa los siguientes campos:</p>
            <ul class="mt-3 list-disc pl-5">
                @foreach($errors->messages() as $field => $messages)
                    <li><a class="underline" href="#{{ str_contains($field, '.') ? 'detalles' : $field }}">{{ $messages[0] }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('solicitud.store') }}" method="POST" class="glass-panel mt-10 space-y-6 rounded-3xl p-6 sm:p-10">
        @csrf
        <p class="text-sm text-slate-600">Los campos con * son obligatorios.</p>
        <x-marketing-field name="nombre" label="Tu nombre" required>
            <input id="nombre" name="nombre" type="text" autocomplete="name" value="{{ old('nombre') }}" required maxlength="255" class="form-field" aria-invalid="{{ $errors->has('nombre') ? 'true' : 'false' }}" @error('nombre') aria-describedby="nombre-error" @enderror>
        </x-marketing-field>
        <x-marketing-field name="email" label="Correo electrónico" required>
            <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required maxlength="255" class="form-field" aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}" @error('email') aria-describedby="email-error" @enderror>
        </x-marketing-field>
        <div class="grid gap-6 sm:grid-cols-2">
            <x-marketing-field name="medio_contacto" label="¿Cómo prefieres que te contactemos?" required>
                <select id="medio_contacto" name="medio_contacto" required class="form-field" aria-invalid="{{ $errors->has('medio_contacto') ? 'true' : 'false' }}" @error('medio_contacto') aria-describedby="medio_contacto-error" @enderror>
                    @foreach(config('solicitudes.medios') as $value => $label)<option value="{{ $value }}" @selected(old('medio_contacto', 'email') === $value)>{{ $label }}</option>@endforeach
                </select>
            </x-marketing-field>
            <x-marketing-field name="telefono" label="Teléfono / WhatsApp">
                <input id="telefono" name="telefono" type="tel" autocomplete="tel" value="{{ old('telefono') }}" maxlength="30" class="form-field" aria-invalid="{{ $errors->has('telefono') ? 'true' : 'false' }}" aria-describedby="phone-help{{ $errors->has('telefono') ? ' telefono-error' : '' }}" @required(in_array(old('medio_contacto'), ['whatsapp', 'llamada']))>
                <p id="phone-help" class="mt-2 text-sm text-slate-600">Obligatorio para WhatsApp o llamada. Opcional para correo o videollamada.</p>
            </x-marketing-field>
        </div>
        <x-marketing-field name="tipo_proyecto" label="¿Qué necesitas mejorar?" required>
            <select id="tipo_proyecto" name="tipo_proyecto" required class="form-field" aria-invalid="{{ $errors->has('tipo_proyecto') ? 'true' : 'false' }}" @error('tipo_proyecto') aria-describedby="tipo_proyecto-error" @enderror>
                <option value="">Selecciona una opción</option>
                @foreach(config('solicitudes.tipos') as $value => $label)<option value="{{ $value }}" @selected(old('tipo_proyecto') === $value)>{{ $label }}</option>@endforeach
            </select>
        </x-marketing-field>
        <x-marketing-field name="descripcion" label="Cuéntanos tu problema o idea" required>
            <textarea id="descripcion" name="descripcion" rows="5" required minlength="30" maxlength="3000" class="form-field" placeholder="¿Cómo lo resuelves hoy y qué te gustaría cambiar?" aria-invalid="{{ $errors->has('descripcion') ? 'true' : 'false' }}" aria-describedby="description-help{{ $errors->has('descripcion') ? ' descripcion-error' : '' }}">{{ old('descripcion') }}</textarea>
            <p id="description-help" class="mt-2 text-sm text-slate-600">Entre 30 y 3,000 caracteres. Evita incluir contraseñas, datos sensibles o información de terceros.</p>
        </x-marketing-field>
        <details id="detalles" class="rounded-2xl border border-slate-900/10 p-5" @if(collect(['empresa', 'tiempo_estimado', 'tecnologias', 'comentarios'])->contains(fn ($field) => $errors->has($field) || $errors->has($field.'.*'))) open @endif>
            <summary class="cursor-pointer font-semibold">Detalles adicionales (opcional)</summary>
            <div class="mt-6 space-y-6">
                <x-marketing-field name="empresa" label="Empresa u organización">
                    <input id="empresa" name="empresa" autocomplete="organization" value="{{ old('empresa') }}" maxlength="255" class="form-field">
                </x-marketing-field>
                <x-marketing-field name="tiempo_estimado" label="¿Cuándo lo necesitas?">
                    <select id="tiempo_estimado" name="tiempo_estimado" class="form-field">
                        @foreach(config('solicitudes.plazos') as $value => $label)<option value="{{ $value }}" @selected(old('tiempo_estimado', 'flexible') === $value)>{{ $label }}</option>@endforeach
                    </select>
                </x-marketing-field>
                <fieldset id="tecnologias">
                    <legend class="font-semibold">¿Ya tienes requisitos tecnológicos?</legend>
                    <p class="mt-2 text-sm text-slate-600">Puedes dejarlo vacío; definiremos las herramientas contigo.</p>
                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        @foreach(config('solicitudes.tecnologias') as $tech)
                            <label class="flex items-center gap-3"><input type="checkbox" name="tecnologias[]" value="{{ $tech }}" @checked(in_array($tech, (array) old('tecnologias', []))) class="rounded"> <span>{{ $tech }}</span></label>
                        @endforeach
                    </div>
                    @error('tecnologias')<p class="field-error">{{ $message }}</p>@enderror
                </fieldset>
                <x-marketing-field name="comentarios" label="Restricciones o comentarios adicionales">
                    <textarea id="comentarios" name="comentarios" rows="3" maxlength="1000" class="form-field">{{ old('comentarios') }}</textarea>
                </x-marketing-field>
            </div>
        </details>
        <div>
            <label class="flex items-start gap-3" for="acepta_privacidad">
                <input type="checkbox" name="acepta_privacidad" id="acepta_privacidad" value="1" required @checked(old('acepta_privacidad')) class="mt-1 rounded" @error('acepta_privacidad') aria-describedby="acepta_privacidad-error" @enderror>
                <span>Acepto que SAKEV Solutions use mis datos para responder y dar seguimiento a esta solicitud. *</span>
            </label>
            <a href="{{ route('privacidad') }}" class="mt-3 inline-block underline" target="_blank" rel="noopener noreferrer">Consultar el uso de mis datos (abre otra pestaña)</a>
            @error('acepta_privacidad')<p id="acepta_privacidad-error" class="field-error">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="rounded-full bg-slate-900 px-7 py-4 font-semibold text-white">Enviar solicitud</button>
        <p class="text-sm text-slate-600">Primero revisaremos tu necesidad. El alcance, plazo y presupuesto se acuerdan antes de contratar.</p>
    </form>
</section>
@endsection
