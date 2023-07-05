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
        $personalNumber = $this->faker->numberBetween('60000', '65000');
        $lastName       = $this->faker->lastName();
        $firstName      = $this->faker->firstName();

        return [
            'personal_number'   => $personalNumber,
            'last_name'         => $lastName,
            'first_name'        => $firstName,
            'email'             => Str::lower($lastName) . '.' . Str::lower($firstName) . '@' . $this->faker->unique()->domainName(),
            'email_verified_at' => now(),
            'password'          => bcrypt('password'),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
