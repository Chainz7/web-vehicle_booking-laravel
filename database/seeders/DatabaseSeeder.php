<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Driver;
use App\Models\MasterVehicle;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->clearAllItemsBeforeInsert();

         User::factory(10)->create();
         Driver::factory(10)->create();
         Role::insert([
             [
                 'role' => 'ADMIN',
                 'created_at' => Carbon::now(),
                 'updated_at' => null,
             ],
             [
                 'role' => 'USER',
                 'created_at' => Carbon::now(),
                 'updated_at' => null,
             ]
         ]);
         MasterVehicle::insert([
             [
                 'name' => 'Truck Hino',
                 'fuel_consume' => 1,
                 'service_schedule' => date('Y-m-d'),
                 'vehicle_type' => 'stuff',
                 'vehicle_ownership' => true,
                 'is_available' => true,
                 'booking_count' => 0
             ],
             [
                 'name' => 'Truck Mitsubishi',
                 'fuel_consume' => 2,
                 'service_schedule' => date('Y-m-d'),
                 'vehicle_type' => 'stuff',
                 'vehicle_ownership' => false,
                 'is_available' => true,
                 'booking_count' => 0
             ],
             [
                 'name' => 'Truck Optimum Pret',
                 'fuel_consume' => 4,
                 'service_schedule' => date('Y-m-d'),
                 'vehicle_type' => 'stuff',
                 'vehicle_ownership' => false,
                 'is_available' => true,
                 'booking_count' => 0
             ],
         ]);
    }

    private function clearAllItemsBeforeInsert(){
        User::truncate();
        Role::truncate();
        Driver::truncate();
        MasterVehicle::truncate();
    }

}
