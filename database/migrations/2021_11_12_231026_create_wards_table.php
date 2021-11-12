<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{

    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('volunteer_id');

            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->integer('age')->nullable();

            $table->string('disabled')->nullable();
            $table->string('allergy')->nullable();

            $table->text('address')->nullable();

            $table->json('meta')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('wards');
    }
}
