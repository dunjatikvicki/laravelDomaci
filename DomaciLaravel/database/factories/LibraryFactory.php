<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'email' => $this->faker->safeEmail(),
            'about_us'=>$this->faker->paragraph(),
        ];
    }
}
