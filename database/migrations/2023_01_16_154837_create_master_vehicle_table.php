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
            $table->integer('fuel_consume')->nullable(true);
            $table->date('service_schedule')->nullable(true);
            $table->enum('vehicle_type', ['stuff', 'person'])->nullable(true);
            $table->string('vehicle_picture_url')->nullable(true);
            $table->boolean('vehicle_ownership')->default(false);
            $table->boolean('is_available')->default(true)->nullable(true);
            $table->integer('booking_count')->default(0)->nullable(true);
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
