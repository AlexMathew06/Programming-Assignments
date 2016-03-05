<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('username');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('contactNumber');
            $table->boolean('isTrainer');
            $table->integer('trainerId');
            $table->integer('gymId')->unsigned();
            $table->string('address');
            $table->decimal('money');
            $table->date('DOB');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('gymId')->references('gymId')->on('gyms');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
