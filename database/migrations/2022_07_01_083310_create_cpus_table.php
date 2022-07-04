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
        Schema::create('cpus', function (Blueprint $table) {
            //devono averli tutti uguali questi
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->unsignedBigInteger("vendor_id"); //DICHIARARE PRIMA LA CHIAVE
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->integer('cores');
            $table->integer('threads');
            $table->float('frequency');
            $table->unsignedBigInteger("integrated_gpu_id");
            #$table->foreign('integrated_gpu_id')->references('id')->on('gpus'); 
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
        Schema::dropIfExists('cpus');
    }
};
