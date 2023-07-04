<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mediator;

class MediatorsSeeder extends Seeder
{
    public function run()
    {
        Mediator::create([
            'user_id' => 21,
            'name' => 'Erick Denis',
            'last_name' => 'Mercado Oudalova',
        ]);
        Mediator::create([
            'user_id' => 22,
            'name' => 'Jose Carlos',
            'last_name' => 'Medina',
        ]);
        Mediator::create([
            'user_id' => 23,
            'name' => 'Carlos',
            'last_name' => 'Mamani Quispe',
        ]);
    }
}
