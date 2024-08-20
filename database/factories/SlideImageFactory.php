<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SlideImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(1),
            'body' => $this->faker->name(2),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
