<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['male', 'female']);
        return [
            'name' => fake()->name($gender),
            'place_of_birth' => fake()->city(),
            'date_of_birth' => fake()->date('Y-m-d', 'now'),
            'gender' => $gender,
            'address' => fake()->address(),
            'division' => 'Software Engineering',
            'position' => 'Staff'
        ];
    }
}
