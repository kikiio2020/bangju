<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HouseholdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'address' => $this->faker->address(),
            'about' => $this->faker->text(255),
            'rating' => $this->faker->numberBetween(1,5),
            'num_tasks_completed' => $this->faker->numberBetween(0,20),
            'joined_since' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
