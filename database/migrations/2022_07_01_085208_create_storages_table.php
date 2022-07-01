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
        Schema::create('storages', function (Blueprint $table) {
            $table->bigIncrements('id'); //id
            $table->string('name'); //il nome del prodotto
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade'); //fkey vendor del prodotto
            $table->date('release_date'); //data di rilascio del prodotto
            $table->integer('power_consumption'); //quanto consuma
            //fine

            $table->string('technology'); //HDD, SSD, SSHD, piccione viaggiatore, etc... 
            $table->string('connector'); //PATA, SATA1, SATA2, SATA3, M.2 SATA, M.2 PCIE, etc...
            $table->integer('capacity'); //megabytes
            $table->float('read_speed'); //mb/s
            $table->float('write_speed'); //mb/s
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
        Schema::dropIfExists('storages');
    }
};
