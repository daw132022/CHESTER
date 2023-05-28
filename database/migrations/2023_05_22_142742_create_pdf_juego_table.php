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
        Schema::create('pdf_juegos', function (Blueprint $table) {
            $table->id();
            $table->string('pdf')->nullable();
            $table->bigInteger('juego_id')->unsigned();
            $table->timestamps();
            $table->foreign('juego_id')
                ->references('id')
                ->on('juegos')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdf_juego');
    }
};
