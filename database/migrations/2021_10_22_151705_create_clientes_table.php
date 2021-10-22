<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->foreignId('id_user')
                  ->nullable()
                  ->constrained('users')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('celular1');
            $table->string('email1');
            $table->string('paginaweb');
            $table->foreignId('id_estadocliente')
                  ->nullable()
                  ->constrained('estadoclientes')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('razonsocial');
            $table->string('contacto');
            $table->string('celular2');
            $table->string('email2');
            $table->foreignId('id_area')
                  ->nullable()
                  ->constrained('areas')
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
        Schema::dropIfExists('clientes');
    }
}
