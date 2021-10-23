<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('direccion');
            $table->string('celular1');
            $table->string('email1');
            $table->string('paginaweb');
            $table->foreignId('id_estadocliente')
                  ->nullable()
                  ->constrained('estadoclientes')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('razonsocial');
            $table->string('contaco');
            $table->integer('celular2');
            $table->string('email2');
            $table->foreignId('id_area')
                  ->nullable()
                  ->constrained('areas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_user')
                  ->nullable()
                  ->constrained('users')
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
        Schema::dropIfExists('proveedors');
    }
}
