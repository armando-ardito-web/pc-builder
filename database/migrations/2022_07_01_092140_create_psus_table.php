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
        Schema::create('psus', function (Blueprint $table) {

            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->unsignedBigInteger("vendor_id"); //DICHIARARE PRIMA LA CHIAVE
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine
            
            $table->integer('wattage'); // il massimo di watt che può dare
            $table->string('certification'); //NULL, 80+ bronze, 80+ silver, etc..
            $table->boolean('has_fan'); //se ha la ventola
            $table->string('form_factor'); //il formato dell'alimentatore
            $table->string('modular'); //NULL, full, semi-modular
            $table->string('power_connector'); //24+4, 12VA, 6pin lenovo, etc..
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
        Schema::dropIfExists('psus');
    }
};
