<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Group ' . \Str::random(4),
            'description' => $this->faker->text(100),
            'invitation_token' => \Str::random(10),
            'creator_id'=>$this->faker->numberBetween(1,29)
        ];
    }
}
