<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->string('document', 25);
            $table->string('name', 255);
            $table->string('lastname', 255);
            $table->string('ip', 25)->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedBigInteger('idRound');
            $table->unsignedBigInteger('idSinger');
            $table->foreign('idRound')->references('id')->on('round')->onUpdate('no action')->onDelete('no action');
            $table->foreign('idSinger')->references('id')->on('singer')->onUpdate('no action')->onDelete('no action');
            $table->softDeletes();
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
        Schema::dropIfExists('vote');
    }
}
