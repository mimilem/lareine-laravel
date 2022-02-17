<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facilitator_id')->nullable();
            $table->text('title');
            $table->text('sub_title')->nullable();
            $table->text('picture')->nullable();
            $table->date('date');
            $table->text('place');
            $table->text('target_audience')->nullable();
            $table->text('prerequisites')->nullable();
            $table->double('amount')->default(0,0);
            $table->text('country');
            $table->text('province');
            $table->text('city');
            $table->text('status')->default('active');
            $table->uuid('token')->default(Str::uuid()->toString())->unique();
            $table->text('description');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->text('activity_type');
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
        Schema::dropIfExists('activities');
    }
}
