<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_internos', function (Blueprint $table) {
            $table->id();
            $table->string('no_ctl',20);
            $table->foreignid('carrera_id')->constrained();
            $table->integer('semestre');
            $table->string('periodo',255);
            $table->string('no_of',20);
            $table->integer('status');
            $table->foreignid('user_id')->constrained();
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
        Schema::dropIfExists('alumnos_internos');
    }
}
