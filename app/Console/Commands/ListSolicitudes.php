<?php

namespace App\Console\Commands;

use App\Models\Solicitud;
use Illuminate\Console\Command;

class ListSolicitudes extends Command
{
    protected $signature = 'solicitudes:list {--limit=20 : Number of recent requests (1-100)} {--id= : Show one complete request}';

    protected $description = 'Consultar solicitudes comerciales desde una sesión autorizada del servidor';

    public function handle(): int
    {
        // Strip terminal control characters from untrusted form text.
        $safe = fn ($value) => preg_replace('/[\x00-\x1F\x7F\x{0080}-\x{009F}]/u', ' ', (string) $value);
        if ($id = $this->option('id')) {
            $solicitud = Solicitud::find($id);
            if (! $solicitud) {
                $this->error('No se encontró la solicitud.');
                return self::FAILURE;
            }
            foreach ($solicitud->toArray() as $key => $value) {
                $this->output->writeln($key.': '.$safe(is_array($value) ? implode(', ', $value) : $value), \Symfony\Component\Console\Output\OutputInterface::OUTPUT_RAW);
            }
            return self::SUCCESS;
        }

        $limit = max(1, min(100, (int) $this->option('limit')));
        // Avoid parsing submitted names or email addresses as console formatting.
        $this->line('Folio | Fecha | Medio | Necesidad');
        Solicitud::latest('id')->limit($limit)->get()->each(function ($item) use ($safe) {
            $this->output->writeln($safe("{$item->id} | {$item->created_at} | {$item->medio_contacto} | {$item->tipo_proyecto}"), \Symfony\Component\Console\Output\OutputInterface::OUTPUT_RAW);
        });
        return self::SUCCESS;
    }
}
