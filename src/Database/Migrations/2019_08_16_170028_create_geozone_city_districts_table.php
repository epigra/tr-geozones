<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeozoneCityDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('geozone_city_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('city_id')->unsigned();
            $table->string('ilce', 50);
            $table->string('semt', 50);
            $table->string('mahalle', 100);
            $table->string('posta_kodu', 5);

            $table->unique(['city_id', 'ilce', 'semt', 'mahalle', 'posta_kodu'], 'geozone_key');
            $table->foreign('city_id')->references('id')->on('geozone_cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('city_districts');
    }
}
