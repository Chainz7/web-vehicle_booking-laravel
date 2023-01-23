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

        Driver::insert([
            [
                'fullname' => 'Amycus ',
                'profile_picture_url' => 'https://images.alphacoders.com/692/thumb-1920-692590.jpg',
            ],
            [
                'fullname' => 'Alexis  ',
                'profile_picture_url' => 'https://i.pinimg.com/originals/69/d4/70/69d470a923ee96f4ffd9f40dc4556df3.jpg',
            ],
            [
                'fullname' => 'Beyanka ',
                'profile_picture_url' => 'https://i.pinimg.com/originals/64/8e/28/648e28e9d4cc5196cdfdd5b24f530504.jpg',
            ],
            [
                'fullname' => 'Tae-yeon ',
                'profile_picture_url' => 'https://w0.peakpx.com/wallpaper/928/495/HD-wallpaper-mermaid-lenka-zapletalova-face-pink-underwater-fish-vara-fantasy-girl-pesti-summer-siren.jpg',
            ],
            [
                'fullname' => 'Northman ',
                'profile_picture_url' => 'https://w0.peakpx.com/wallpaper/731/765/HD-wallpaper-mermaid-shell-girl-summer-face-siren-escume-art-vara-fantasy.jpg',
            ],
        ]);
        Role::insert([
            [
                'role' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'role' => 'approver',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ]
        ]);
        MasterVehicle::insert([
            [
                'name' => 'Mercedes-Benz',
                'fuel_consume' => 12,
                'service_schedule' => date('2025-9-24'),
                'vehicle_type' => 'person',
                'vehicle_picture_url' => 'https://static.carmudi.co.id/ADzndCuuURO2EFlRJ28zyV_R7Bc=/900x405/http://trenotomotif.com/ncs/images/Mercedes-Benz/A200ProgressiveLineCKD/Mercedes-Benz-A-200-Progressive-Line.jpg',
                'vehicle_ownership' => false,
                'is_available' => true,
                'booking_count' => 0
            ],
            [
                'name' => 'Fuso',
                'fuel_consume' => 18,
                'service_schedule' => date('2022-12-1'),
                'vehicle_type' => 'stuff',
                'vehicle_picture_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/2020_Mitsubishi_Fuso_Colt_Diesel_FE_74_HD_K_3.9_%2820201212%29_01.jpg/640px-2020_Mitsubishi_Fuso_Colt_Diesel_FE_74_HD_K_3.9_%2820201212%29_01.jpg',
                'vehicle_ownership' => true,
                'is_available' => true,
                'booking_count' => 0
            ],
            [
                'name' => 'Daihatsu',
                'fuel_consume' => 14,
                'service_schedule' => date('2024-5-19'),
                'vehicle_type' => 'stuff',
                'vehicle_picture_url' => 'https://statik.tempo.co/data/2021/12/25/id_1076240/1076240_720.jpg',
                'vehicle_ownership' => true,
                'is_available' => false,
                'booking_count' => 0
            ],
            [
                'name' => 'Tesla',
                'fuel_consume' => 13,
                'service_schedule' => date('2024-9-7'),
                'vehicle_type' => 'person',
                'vehicle_picture_url' => 'https://cdn.motor1.com/images/mgl/VA0z9/s3/tesla-roadster.jpg',
                'vehicle_ownership' => false,
                'is_available' => true,
                'booking_count' => 0
            ],
            [
                'name' => 'Carry',
                'fuel_consume' => 25,
                'service_schedule' => date('2027-8-24'),
                'vehicle_type' => 'stuff',
                'vehicle_picture_url' => 'https://imgcdnblog.carvaganza.com/wp-content/uploads/2019/04/Suzuki-Carry_01.jpg',
                'vehicle_ownership' => true,
                'is_available' => true,
                'booking_count' => 0
            ],
            [
                'name' => 'BMW',
                'fuel_consume' => 10,
                'service_schedule' => date('2026-2-1'),
                'vehicle_type' => 'person',
                'vehicle_picture_url' => 'https://cdn-1.motorsport.com/images/amp/0mbEDB52/s1000/bmw-i8-coupe-1.jpg',
                'vehicle_ownership' => true,
                'is_available' => true,
                'booking_count' => 0
            ],
            [
                'name' => 'Rolls Royce',
                'fuel_consume' => 10,
                'service_schedule' => date('2029-5-1'),
                'vehicle_type' => 'person',
                'vehicle_picture_url' => 'https://www.autos.id/wp-content/uploads/2022/01/rolls-royce-black-badge-wraith-by-spofec.jpg',
                'vehicle_ownership' => false,
                'is_available' => false,
                'booking_count' => 0
            ],
            [
                'name' => 'Jazz',
                'fuel_consume' => 19,
                'service_schedule' => date('2022-12-12'),
                'vehicle_type' => 'person',
                'vehicle_picture_url' => 'https://asset.honda-indonesia.com/2020/04/27/exterior_2l_1__1588046929826.jpg',
                'vehicle_ownership' => true,
                'is_available' => true,
                'booking_count' => 0
            ],
            [
                'name' => 'Ferrari',
                'fuel_consume' => 8,
                'service_schedule' => date('2028-12-5'),
                'vehicle_type' => 'person',
                'vehicle_picture_url' => 'https://cdn.motor1.com/images/mgl/Znnm7r/s1/ferrari-sp48-unica.jpg',
                'vehicle_ownership' => false,
                'is_available' => true,
                'booking_count' => 0
            ],
        ]);
    }

    private function clearAllItemsBeforeInsert()
    {
        User::truncate();
        Role::truncate();
        Driver::truncate();
        MasterVehicle::truncate();
    }
}
