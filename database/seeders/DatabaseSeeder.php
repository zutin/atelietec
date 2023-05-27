<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Carrier::factory(2)->create();
        \App\Models\Facility::factory(10)->create();
        \App\Models\Ticket::factory(3)->create();
        \App\Models\TicketFacility::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Lucca',
            'email' => 'lucca@dev.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
    }
}
