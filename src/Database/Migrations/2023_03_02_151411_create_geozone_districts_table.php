<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeozoneDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('geozone_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('county_id')->unsigned();
            $table->string('name');

            $table->foreign('county_id')->references('id')->on('geozone_counties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('geozone_districts');
    }
}
