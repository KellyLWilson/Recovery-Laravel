<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsCountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations_counties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('county_id');
            $table->timestamps();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('county_id')->references('id')->on('counties');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations_counties');
    }
}
