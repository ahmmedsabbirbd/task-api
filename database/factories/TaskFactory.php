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
    public function definition(): array
    {
        return [ 
            'id'=> fake()->unique()->randomNumber(),
            'name'=>fake()->name(),
            'phone'=>fake()->phoneNumber(),
            'iscomplete'=>rand(0, 1),
            'isTrue'=>rand(0, 1),
        ];
    }
}
