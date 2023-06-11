<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_post'=>$this->faker->numberBetween($min = 1, $max = 5),
            'id_user'=>$this->faker->numberBetween($min = 1, $max = 5),
            'text'=>$this->faker->sentence(),
        ];
    }
}
