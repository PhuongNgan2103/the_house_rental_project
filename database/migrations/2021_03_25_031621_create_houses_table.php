<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('name');
            $table->unsignedBigInteger('room_type_id');
            $table->string('address');
            $table->unsignedInteger('numberBedRoom');
            $table->unsignedInteger('numberBathRoom');
            $table->string('desc');
            $table->unsignedBigInteger('status_id');
            $table->unsignedInteger('pricePerDay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
