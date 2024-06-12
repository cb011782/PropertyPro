<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Properties>
 */
class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->address,
            'slug' => $this->faker->unique()->slug,
            'type' => $this->faker->word,
            'price' => $this->faker->numberBetween(10000, 1000000),
            'size' => $this->faker->numberBetween(100, 1000),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence,

        ];
    }
}
