<?php

namespace Database\Factories;

use App\Models\NewsLetters;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsLettersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsLetters::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'employer' => true,
            'job_seeker' => true,
            'status' => true,
        ];
    }
}
