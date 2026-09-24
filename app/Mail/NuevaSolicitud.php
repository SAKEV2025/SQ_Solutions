<?php

namespace App\Mail;

use App\Models\Solicitud;
use Illuminate\Mail\Mailable;

class NuevaSolicitud extends Mailable
{
    public function __construct(public Solicitud $solicitud) {}

    public function build(): static
    {
        return $this->subject('Nueva solicitud SAKEV #'.$this->solicitud->id)
            ->view('emails.nueva-solicitud');
    }
}
