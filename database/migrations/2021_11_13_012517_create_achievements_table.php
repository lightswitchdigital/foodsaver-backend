<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{

    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('desc')->nullable();
            $table->integer('min_value')->default(0);
            $table->integer('max_value');
            $table->text('reward');
        });
    }


    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
