<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'posx'=>$this->faker()->latitude(),
            'posy'=>$this->faker()->longitude(),
            'fec_reg'=>$this->faker()->date($format='d-m-Y'),
            'estado'=>$this->faker()->randomElement(['0','1'])
        ];
    }
}
