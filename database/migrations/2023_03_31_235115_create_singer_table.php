<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singer', function (Blueprint $table) {
            $table->id();
            $table->string('document', 25)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('picture', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('state')->default(1);
            $table->unsignedBigInteger('idRound');
            $table->foreign('idRound')->references('id')->on('round')->onUpdate('no action')->onDelete('no action');
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
        Schema::dropIfExists('singer');
    }
}
