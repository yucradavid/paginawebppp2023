<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CriteriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Ejemplo de nombre aleatorio
            'type' => $this->faker->randomElement(['abierta', 'numerica', 'seleccion']), // Ejemplo de tipo aleatorio
            'question_description' => $this->faker->sentence, // Ejemplo de descripción de pregunta aleatoria
            'importance_Criteria' => $this->faker->numberBetween(1, 10),
        ];
    }
}
