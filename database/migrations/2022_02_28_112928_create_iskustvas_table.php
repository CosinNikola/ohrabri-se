<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIskustvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iskustvas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_autora');
            $table->string('naslov');
            $table->mediumText('sadrzaj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iskustvas');
    }
}
