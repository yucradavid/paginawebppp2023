<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practicante>
 */
class PracticanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $practicante=$this->faker->unique->word(20);

        return [
            'practicante'=>$practicante,
            'supervisor'=>$practicante,
            'etapa'=>$practicante,
            'empresa'=>$practicante,
        ];
    }
}
