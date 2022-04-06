<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdgovorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odgovors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_pitanja');
            $table->string('imeDoktora');
            $table->string('sadrzaj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odgovors');
    }
}
