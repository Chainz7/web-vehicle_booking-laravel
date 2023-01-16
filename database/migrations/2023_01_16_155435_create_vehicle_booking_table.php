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
        Schema::create('vehicle_booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('approver_id');
            $table->unsignedBigInteger('submitter_id');
            $table->unsignedBigInteger('driver_id');
            $table->date('booking_date') ->nullable(true);
            $table->tinyInteger('status')->default(2); // 0 = DECLINE 1 = ON_PROGRESS 2 = DONE
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
        Schema::dropIfExists('vehicle_booking');
    }
};
