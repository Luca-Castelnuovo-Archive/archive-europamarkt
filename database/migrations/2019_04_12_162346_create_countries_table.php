<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    public static function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name')->unique();
            $table->timestamps();
        });
    }

    public static function down()
    {
        Schema::dropIfExists('countries');
    }
}
