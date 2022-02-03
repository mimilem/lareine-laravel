<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facilitator_id')->nullable();
            $table->string('title');
            $table->string('subtitle')->unique();
            $table->string('picture')->nullable();
            $table->string('target_audience')->nullable();
            $table->string('prerequisites');
            $table->string('place');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('token')->unique()->nullable();
            $table->dateTime('date');
            $table->string('description');
            $table->time('start_time');
            $table->time('end_time');
            $table->double('amount');
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
        Schema::dropIfExists('courses');
    }
}
