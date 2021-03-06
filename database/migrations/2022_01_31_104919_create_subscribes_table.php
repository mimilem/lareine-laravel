<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('post_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('gender');
            $table->string('work');
            $table->string('status')->default('unpaid');
            $table->string('code')->unique();
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
        Schema::dropIfExists('subscribes');
    }
}
