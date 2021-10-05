<?php

namespace Database\Factories;

use App\Models\FAQ;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FAQFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FAQ::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->sentence(),
            'answer' => $this->faker->paragraph(10)
        ];
    }
}
