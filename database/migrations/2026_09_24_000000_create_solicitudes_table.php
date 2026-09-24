<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('empresa')->nullable();
            $table->string('email');
            $table->string('telefono', 30)->nullable();
            $table->string('tipo_proyecto', 50);
            $table->string('tiempo_estimado', 30)->nullable();
            $table->text('descripcion');
            $table->json('tecnologias')->nullable();
            $table->string('como_nos_encontro', 50)->nullable();
            $table->string('medio_contacto', 30);
            $table->text('comentarios')->nullable();
            $table->string('privacy_version', 30);
            $table->timestamp('consented_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
