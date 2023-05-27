<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class TicketFacilityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'facility_id' => fake()->numberBetween(1, 10),
            'ticket_id' => fake()->numberBetween(1, 3),
            'protocol' => fake()->numberBetween(100000, 999999),
        ];
    }
}
