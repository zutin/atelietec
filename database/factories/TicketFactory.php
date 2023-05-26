<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrier>
 */
class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'situation' => fake()->firstName(),
        ];
    }
}
