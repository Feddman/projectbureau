<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'group_id' => $this->faker->numberBetween(1, 30),
            'subject' => $this->faker->sentence(3),
            'message' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween('-3 months')
        ];
    }
}
