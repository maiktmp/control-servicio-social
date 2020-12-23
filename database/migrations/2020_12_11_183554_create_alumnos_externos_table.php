<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_externos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula',20);
            $table->string('procedencia',255);
            $table->string('periodo',255);
            $table->string('no_of',100);
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
        Schema::dropIfExists('alumnos_externos');
    }
}