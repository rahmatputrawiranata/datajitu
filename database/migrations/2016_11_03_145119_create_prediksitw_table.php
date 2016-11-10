<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediksitwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediksitws', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tanggal');
            $table->text('hari');
            $table->text('prediksi');
            $table->text('besar');
            $table->text('kecil');
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
        Schema::drop('prediksitws');
    }
}
