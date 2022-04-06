<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPitanjes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pitanjes', function (Blueprint $table) {
            $table->string('imeDoktora')->nullable();
            $table->mediumText('sadrzajOdgovora')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pitanjes', function (Blueprint $table) {
            //
        });
    }
}
