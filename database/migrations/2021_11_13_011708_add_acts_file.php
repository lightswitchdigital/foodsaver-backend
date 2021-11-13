<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActsFile extends Migration
{

    public function up()
    {
        Schema::table('acts', function (Blueprint $table) {
            $table->string('file');
        });
    }


    public function down()
    {
        Schema::table('acts', function (Blueprint $table) {
            $table->dropColumn('file');
        });
    }
}
