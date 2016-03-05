<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('workout_programs', function (Blueprint $table) {
            $table->string('WPName');
            $table->string('WPImpact');
            $table->string('WPDescritption');
            $table->integer('workoutId')->unsigned();
            $table->time('workoutTime');
            $table->integer('gymId')->unsigned();
            $table->integer('planId')->unsigned();
            $table->timestamps();

            $table->primary('planId');
            $table->foreign('gymId')->references('gymId')->on('gyms');
            $table->foreign('workoutId')->references('workoutId')->on('workouts');
            $table->foreign('planId')->references('planId')->on('plans');

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
        Schema::drop('workout_programs');
    }
}
