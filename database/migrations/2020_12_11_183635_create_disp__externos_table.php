<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disp__externos', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->string('hr_ent');
            $table->string('hr_sal');
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
        Schema::dropIfExists('disp__externos');
    }
}
