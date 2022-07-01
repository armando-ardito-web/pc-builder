<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coolers', function (Blueprint $table) {
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->string('technology'); //air, water, etc... 
            $table->integer('airflow'); //unità di misura CFM
            $table->integer('tdp'); //fino a quanti watt raffredda
            $table->string('socket'); //AM4, Am3, 1151, etc... separati da virgole

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
        Schema::dropIfExists('coolers');
    }
};
