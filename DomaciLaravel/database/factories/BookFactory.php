<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->firstName(),
            'publisher'=>$this->faker->name(),
            'genre' => $this->faker->sentence(),
            'date' => $this->faker->date(),
            'number_of_pages' => $this->faker->numberBetween(10,1200),
            'library_id' => Library::factory(),
            'author_id'=>Author::factory()
        ];
    }
}
