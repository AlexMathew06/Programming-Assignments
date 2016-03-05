<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trainee_details', function (Blueprint $table) {
            $table->integer('traineeId')->unsigned();
            $table->string('gender');
            $table->string('disabilityDetail');
            $table->string('injuryDetail');
            $table->string('otherDetail');
            $table->boolean('hasPlan');
            $table->integer('planId')->unsigned();
            $table->integer('age');
            $table->decimal('BMD');
            $table->decimal('ChestMeasure');
            $table->decimal('WeistMeasure');
            $table->decimal('HipMeasure');
            $table->decimal('BodyFatPercent');
            $table->decimal('BodyMusclePercent');
            $table->timestamps();

            $table->primary('traineeId');
            $table->foreign('planId')->references('planId')->on('plans');
            $table->foreign('traineeId')->references('userId')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('trainee_details');
    }
}
