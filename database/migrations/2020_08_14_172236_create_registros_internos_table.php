<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_internos', function (Blueprint $table) {
            $table->id();
            $table->time('hr_ent',4);
            $table->time('hr_sal',4);
            $table->integer('hr_totales');
            $table->integer('check')->nullable();
            $table->string('comentarios',800)->nullable();
            $table->foreignid('id_int')->references('id')->on('alumnos_internos');
            $table->integer('status');
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
        Schema::dropIfExists('registros_internos');
    }
}
