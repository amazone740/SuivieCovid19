<?php

namespace Database\Factories;

use App\Models\Symptome;
use Illuminate\Database\Eloquent\Factories\Factory;

class SymptomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Symptome::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'description' => $this->faker->text,
        'origine' => $this->faker->text,
        'cible' => $this->faker->text,
        'mesure_de_riposte' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
