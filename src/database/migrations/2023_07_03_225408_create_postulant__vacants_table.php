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
        Schema::create('postulant__vacants', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->decimal('proposed_budget', 10, 2);
            $table->timestamps();

            $table->unsignedBigInteger('vacant_id');
            $table->foreign('vacant_id')->references('id')->on('vacants')->onDelete('cascade');

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
        Schema::dropIfExists('postulant__vacants');
    }
};
