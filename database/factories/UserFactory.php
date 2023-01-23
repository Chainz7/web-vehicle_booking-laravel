<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname' => fake()->name(),
            'username' => fake()->unique()->userName,
            'password' => bcrypt('password123'), // password
            'role_id' => 1,
            'profile_picture_url' => null,
            'created_at' => $this->faker->unixTime(new \DateTime()),
            'updated_at' => null,
        ];
    }
}
