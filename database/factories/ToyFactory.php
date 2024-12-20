<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "photo" => $this->faker->imageUrl(),
            "description" => $this->faker->text(),
            "min_age" => $this->faker->randomElement([0,3,7,12,16,18]),
        ];
    }
}
