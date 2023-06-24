<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

          'user_id'=>$this->faker->numberBetween(1,4),
            'tags'=>'sport,football,tennis',
            'location'=>$this->faker->city(),
            'message'=>$this->faker->paragraph(4),

            //
        ];
    }
}
