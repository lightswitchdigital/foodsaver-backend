<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAchievementsTable extends Migration
{

    public function up()
    {
        Schema::create('user_achievements', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('achievement_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('value');
            $table->json('meta')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('user_achievements');
    }
}
