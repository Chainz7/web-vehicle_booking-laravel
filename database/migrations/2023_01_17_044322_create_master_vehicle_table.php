<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('fuel_consume');
            $table->string('service_schedule');
            $table->string('vehicle_type');
            $table->boolean('vehicle_ownership');
            $table->boolean('is_available');
            $table->unsignedBigInteger('booking_count');
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
        Schema::dropIfExists('master_vehicle');
    }
};
