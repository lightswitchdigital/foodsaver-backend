<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActsTable extends Migration
{

    public function up()
    {
        Schema::create('acts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('status');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('acts');
    }
}
