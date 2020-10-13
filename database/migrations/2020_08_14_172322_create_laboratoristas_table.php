<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoristas', function (Blueprint $table) {
            $table->id();
            $table->string('ap_p',255);
            $table->string('ap_m',255);
            $table->string('nombre',255);
            $table->foreignid('departamento_id')->constrained();
            $table->foreignid('user_id')->constrained();
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
        Schema::dropIfExists('laboratoristas');
    }
}
