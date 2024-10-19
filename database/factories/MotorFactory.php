<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motor>
 */
class MotorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isFake' => fake()->boolean(),
            'empresa_id' => fake()->randomElement(Empresa::pluck('id')),
            'hash' => fake()->md5(),
            'descricao' => 'Misturador RMPL900'
        ];
    }
}
