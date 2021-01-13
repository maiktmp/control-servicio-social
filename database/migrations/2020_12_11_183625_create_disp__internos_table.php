<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disp__internos', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->string('hr_ent');
            $table->string('hr_sal');
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
        Schema::dropIfExists('disp__internos');
    }
}
