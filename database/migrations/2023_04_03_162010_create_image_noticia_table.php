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
        Schema::create('image_noticias', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->bigInteger('noticia_id')->unsigned();
            $table->timestamps();
            $table->foreign('noticia_id')
                ->references('id')
                ->on('noticias')
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
        Schema::dropIfExists('image_noticia_types');
    }
};
