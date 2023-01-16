<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    public function definition()
    {
        return [
            'fullname' => fake()->name,
            'profile_picture_url' => null,
            'created_at' => $this->faker->unixTime(new \DateTime()),
            'updated_at' => null,
        ];
    }
}
