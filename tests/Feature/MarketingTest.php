<?php

use App\Mail\NuevaSolicitud;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Mail;

function validLead(array $overrides = []): array
{
    return array_replace([
        'nombre' => 'Persona de prueba',
        'email' => 'prueba@example.com',
        'tipo_proyecto' => 'automatizacion',
        'descripcion' => 'Quiero automatizar la preparación de los reportes semanales de mi equipo.',
        'medio_contacto' => 'email',
        'acepta_privacidad' => '1',
    ], $overrides);
}

beforeEach(function () {
    $this->withoutVite();
    config(['solicitudes.notify_email' => null]);
});

it('renders all public pages and a parseable sitemap', function () {
    foreach (['/', '/contacto', '/privacidad'] as $path) {
        $this->get($path)->assertOk()->assertSee('lang="es-MX"', false)->assertSee('SAKEV Solutions');
    }
    $this->get('/')->assertSee('datos ficticios')->assertSee('CRM y seguimiento comercial');
    $response = $this->get('/sitemap.xml')->assertOk()->assertHeader('Content-Type', 'application/xml; charset=UTF-8');
    $xml = simplexml_load_string($response->getContent());
    expect($xml)->not->toBeFalse();
    expect($xml->url)->toHaveCount(3);
});

it('persists an email request without a phone or optional details', function () {
    $this->post('/solicitud', validLead())->assertRedirect(route('solicitud.create'))->assertSessionHas('success');
    $lead = Solicitud::sole();
    expect($lead->telefono)->toBeNull();
    expect($lead->consented_at)->not->toBeNull();
    expect($lead->privacy_version)->toBe(config('solicitudes.privacy_version'));
    expect($lead->descripcion)->toBe(validLead()['descripcion']);
});

it('requires a phone only for phone based contact', function ($medium) {
    $this->post('/solicitud', validLead(['medio_contacto' => $medium]))->assertSessionHasErrors('telefono');
    expect(Solicitud::count())->toBe(0);
    $this->post('/solicitud', validLead(['medio_contacto' => $medium, 'telefono' => '5512345678']))->assertSessionHasNoErrors();
    expect(Solicitud::count())->toBe(1);
})->with(['whatsapp', 'llamada']);

it('rejects missing consent and invalid input without storing it', function () {
    $this->post('/solicitud', validLead(['acepta_privacidad' => '0', 'tipo_proyecto' => 'invalid', 'descripcion' => 'corta']))
        ->assertSessionHasErrors(['acepta_privacidad', 'tipo_proyecto', 'descripcion']);
    expect(Solicitud::count())->toBe(0);
});

it('accepts legacy forms and stores optional fields', function () {
    $this->post('/solicitud', validLead(['tipo_proyecto' => 'appsheet', 'tecnologias' => ['Laravel'], 'empresa' => 'Ejemplo']))->assertSessionHasNoErrors();
    expect(Solicitud::sole()->tecnologias)->toBe(['Laravel']);
});

it('notifies the configured recipient after saving', function () {
    Mail::fake();
    config(['solicitudes.notify_email' => 'comercial@example.com']);
    $this->post('/solicitud', validLead())->assertSessionHas('success');
    Mail::assertSent(NuevaSolicitud::class, fn ($mail) => $mail->hasTo('comercial@example.com') && $mail->solicitud->exists);
});

it('keeps the request if the mail service fails', function () {
    config(['solicitudes.notify_email' => 'comercial@example.com']);
    Mail::shouldReceive('to')->once()->andThrow(new RuntimeException('SMTP unavailable'));
    $this->post('/solicitud', validLead())->assertSessionHas('success');
    expect(Solicitud::count())->toBe(1);
});

it('escapes submitted text in the notification', function () {
    $lead = Solicitud::create([
        ...collect(validLead(['nombre' => '<script>alert(1)</script>']))->except('acepta_privacidad')->all(),
        'privacy_version' => config('solicitudes.privacy_version'), 'consented_at' => now(),
    ]);
    $html = (new NuevaSolicitud($lead))->render();
    expect($html)->not->toContain('<script>')->toContain('&lt;script&gt;');
});

it('limits repeated submissions', function () {
    $this->withServerVariables(['REMOTE_ADDR' => '192.0.2.24']);
    for ($i = 0; $i < 5; $i++) $this->post('/solicitud', validLead())->assertRedirect();
    $this->post('/solicitud', validLead())->assertStatus(429);
    expect(Solicitud::count())->toBe(5);
});

it('offers server-only retrieval for follow up', function () {
    $this->post('/solicitud', validLead());
    $this->artisan('solicitudes:list')->assertSuccessful();
    $this->artisan('solicitudes:list', ['--id' => Solicitud::sole()->id])->assertSuccessful();
});
