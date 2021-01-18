<?php

namespace Database\Factories;

use App\Models\Casinfecter;
use Illuminate\Database\Eloquent\Factories\Factory;

class CasinfecterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Casinfecter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id' => $this->faker->randomDigitNotNull,
        'statut_id' => $this->faker->randomDigitNotNull,
        'symptome_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
