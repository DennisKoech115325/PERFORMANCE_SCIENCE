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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('reason');
            $table->integer('traveltime');
            $table->integer('studytime');
            $table->integer('failures');
            $table->string('school_sup');
            $table->string('internet');
            $table->integer('freetime');
            $table->integer('goout');
            $table->integer('health');
            $table->integer('absences');
            $table->integer('G1');
            $table->integer('G2');
            $table->integer('G3');
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
        Schema::dropIfExists('statistics');
    }
};
