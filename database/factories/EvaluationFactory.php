<?php

namespace Database\Factories;

use App\Models\Competitor;
use App\Models\Criteria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'competitor_id' => Competitor::factory(), // Crear una relación con un Competitor aleatorio
            'criteria_id' => Criteria::factory(), // Crear una relación con un CriteriaEvaluation aleatorio
            'comments' => $this->faker->paragraph,
            'qualification' => $this->faker->numberBetween(1, 100),
            'state' => $this->faker->randomElement(['Entrada', 'Intermedio', 'Final']),
            'evaluation_date' => $this->faker->date,
        ];
    }
}
