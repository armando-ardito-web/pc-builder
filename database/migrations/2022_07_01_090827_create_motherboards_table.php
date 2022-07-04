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
        Schema::create('motherboards', function (Blueprint $table) {
            
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->unsignedBigInteger("vendor_id"); //DICHIARARE PRIMA LA CHIAVE
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->string('socket');
            $table->string('chipset');
            $table->integer('ram_slots');
            $table->integer('ram_technology');
            $table->integer('ram_max'); //MB
            $table->string('form_factor'); //atx, microatx, miniatx, etc....
            $table->string('power_connector'); //12VA, 24+4, proprietario tipo 4 pin 6 pin lenovo quello che è
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
        Schema::dropIfExists('motherboards');
    }
};
