<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            "title" => str_replace(' ', '_', fake() -> sentence(2)),
            "framework" => fake() -> randomElement(['Laravel', 'VUE', false]),
            "description" => fake() -> paragraph()
        ];
    }
}
