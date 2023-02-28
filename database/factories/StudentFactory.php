<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'father_name'=>fake()->name(),
            'email'=>fake()->email(),
            'contact'=>fake()->phoneNumber(),
            'city'=>fake()->city(),
            'pincode'=>fake()->postcode()
        ];
    }
}
