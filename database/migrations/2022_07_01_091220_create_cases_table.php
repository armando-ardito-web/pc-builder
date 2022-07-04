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
        Schema::create('cases', function (Blueprint $table) {
            
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->unsignedBigInteger("vendor_id"); //DICHIARARE PRIMA LA CHIAVE
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->string('form_factor'); //della mobo che ci va dentro
            $table->float('width');
            $table->float('height');
            $table->float('length');
            $table->string('side_panel'); //vetro, plastica, metallo, NULL se è tipo una test bench
            $table->string('psu_form_factor'); //il fattore forma della psu che ora non mi vengonoin mente
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
        Schema::dropIfExists('cases');
    }
};
