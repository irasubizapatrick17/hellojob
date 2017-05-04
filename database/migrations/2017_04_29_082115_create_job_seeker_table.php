<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seeker', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('bio');
            $table->string('profile');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('personal_status');
            $table->string('telephone');
            $table->string('nationality');
            $table->string('district');
            $table->string('academic');
            $table->string('subject');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('position');
            $table->string('institution');
            $table->string('personal_country');
            $table->string('personal_location');
            $table->string('duration');
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
        Schema::drop('job_seeker');
    }
}
