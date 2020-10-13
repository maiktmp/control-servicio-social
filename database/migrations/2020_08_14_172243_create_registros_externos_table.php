<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_externos', function (Blueprint $table) {
            $table->id();
            $table->time('hr_ent',4);
            $table->time('hr_sal',4);
            $table->integer('hr_totales');
            $table->integer('check');
            $table->string('comentarios',800);
            $table->foreignid('id_ext')->references('id')->on('alumnos_externos');
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
        Schema::dropIfExists('registros_externos');
    }
}
