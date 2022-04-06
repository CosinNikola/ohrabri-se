<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime');
            $table->string('prezime');
            $table->string('specijalizacija');
            $table->mediumText('slika');
            $table->string('email');
            $table->string('brTel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doktors');
    }
}
