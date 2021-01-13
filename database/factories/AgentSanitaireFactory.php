<?php

namespace Database\Factories;

use App\Models\AgentSanitaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentSanitaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AgentSanitaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'cni_agent' => $this->faker->word,
        'ville_residence' => $this->faker->word,
        'centre_provenance' => $this->faker->word,
        'debut_service' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
