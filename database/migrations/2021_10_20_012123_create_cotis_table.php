<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')
                  ->nullable()
                  ->constrained('clientes')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_asignado')
                  ->nullable()
                  ->constrained('asignados')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_expira')
                  ->nullable()
                  ->constrained('expiras')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_moneda')
                  ->nullable()
                  ->constrained('monedas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_tiempoentrega')
                  ->nullable()
                  ->constrained('tiempoentregas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_formapago')
                  ->nullable()
                  ->constrained('formapagos')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_estado')
                  ->nullable()
                  ->constrained('estados')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_piepagina')
                  ->nullable()
                  ->constrained('piepaginas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_condicions')
                  ->nullable()
                  ->constrained('condicions')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotis');
    }
}
