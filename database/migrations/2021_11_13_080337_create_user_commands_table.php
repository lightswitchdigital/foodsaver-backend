<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCommandsTable extends Migration
{

    public function up()
    {
        Schema::create('user_commands', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('command_id');
            $table->json('meta')->nullable();

            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('command_id');
        });
    }


    public function down()
    {
        Schema::dropIfExists('user_commands');
    }
}
