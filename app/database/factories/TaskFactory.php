<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content' => $this->faker->realText(100),
            'start' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week'),
            'end' => $this->faker->dateTimeBetween($startDate = '+2 week', $endDate = '+4 week'),
            'completed' => $this->faker->boolean()
        ];
    }
}
