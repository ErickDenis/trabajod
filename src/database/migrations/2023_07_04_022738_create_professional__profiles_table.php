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
        Schema::create('professional__profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('path_to_file');
            $table->text('description');
            $table->text('tags');
            $table->timestamps();

            $table->unsignedBigInteger('postulant_id');
            $table->foreign('postulant_id')->references('id')->on('postulants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional__profiles');
    }
};
