<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    public static function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->string('fingerprint')->primary();
            $table->string('country_code');
            $table->timestamps();
        });
    }

    public static function down()
    {
        Schema::dropIfExists('votes');
    }
}
