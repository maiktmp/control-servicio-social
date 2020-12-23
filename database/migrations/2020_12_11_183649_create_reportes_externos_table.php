<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes_externos', function (Blueprint $table) {
            $table->id();
            $table->string('fecha',20);
            $table->integer('horas');
            $table->integer('hr_totales');
            $table->foreignid('id_ext')->references('id')->on('alumnos_externos');
            $table->integer('status');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes_externos');
    }
}