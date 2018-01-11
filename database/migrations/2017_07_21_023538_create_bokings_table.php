<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBokingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bokings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pengguna_id');
            $table->unsignedInteger('agen_id');
            $table->timestamps();

            $table->foreign('pengguna_id')->references('id')->on('penggunas')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('agen_id')->references('id')->on('agens')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bokings');
    }
}
