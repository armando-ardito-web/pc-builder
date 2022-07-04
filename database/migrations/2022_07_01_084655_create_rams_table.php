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
        Schema::create('rams', function (Blueprint $table) {
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->unsignedBigInteger("vendor_id"); //DICHIARARE PRIMA LA CHIAVE
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->string('technology'); //SDRAM, DDR1, DDR2, etc...
            $table->integer('capacity'); //MI RACCOMANDO IN MEGABYTES
            $table->float('frequency'); //MI RACCOMANDO IN MHZ
            $table->boolean('error_correction'); //se la ram è ECC o meno
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
        Schema::dropIfExists('rams');
    }
};
