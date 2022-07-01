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
        Schema::create('mouses', function (Blueprint $table) {
            
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->integer('buttons'); //quanti bottoni 
            $table->boolean('is_wireless'); //si o no
            $table->string('rgb'); //NULL, static, full
            $table->string('battery'); //NULL, AA, AAA, AAAA, LiPo, etc..
            $table->string('port'); //porta di carica: microusb, miniusb, wireless, lightning, etc.


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
        Schema::dropIfExists('mouses');
    }
};
