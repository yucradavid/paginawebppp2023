<?php

namespace Database\Factories;

use App\Models\Competitor;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date,
            'location' => $this->faker->word,
            'time' => $this->faker->time,
            'responsible' => $this->faker->name,
            'duration' => $this->faker->numberBetween(1, 24),
            'link' => $this->faker->url,
            'material_id' => Material::factory(),
            'competitor_id' => Competitor::factory()
        ];
    }
}
