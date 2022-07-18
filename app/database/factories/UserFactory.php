<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt($this->faker->password),
            'foto' => $this->faker->imageUrl(),
            'role' => $this->faker->numberBetween($min = 1, $max = 3),
            'status' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
