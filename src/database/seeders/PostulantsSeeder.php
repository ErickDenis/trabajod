<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Postulant;


class PostulantsSeeder extends Seeder
{
    public function run()
    {
        Postulant::create([
            'user_id' => 11,
            'name' => 'John',
            'last_name' => 'Doe',
            'birthdate' => '1990-05-15',
        ]);
        Postulant::create([
            'user_id' => 12,
            'name' => 'Jane',
            'last_name' => 'Smith',
            'birthdate' => '1985-09-20',
        ]);
        Postulant::create([
            'user_id' => 13,
            'name' => 'Michael',
            'last_name' => 'Jackson',
            'birthdate' => '1978-02-10',
        ]);
        Postulant::create([
            'user_id' => 14,
            'name' => 'Emma',
            'last_name' => 'Watson',
            'birthdate' => '1995-11-28',
        ]);
        Postulant::create([
            'user_id' => 15,
            'name' => 'David',
            'last_name' => 'Bowie',
            'birthdate' => '1972-07-02',
        ]);
        Postulant::create([
            'user_id' => 16,
            'name' => 'Lisa',
            'last_name' => 'Johnson',
            'birthdate' => '1988-04-16',
        ]);
        Postulant::create([
            'user_id' => 17,
            'name' => 'Peter',
            'last_name' => 'Parker',
            'birthdate' => '1983-12-07',
        ]);
        Postulant::create([
            'user_id' => 18,
            'name' => 'Sarah',
            'last_name' => 'Connor',
            'birthdate' => '1987-08-23',
        ]);
        Postulant::create([
            'user_id' => 19,
            'name' => 'George',
            'last_name' => 'Harrison',
            'birthdate' => '1977-03-12',
        ]);
        Postulant::create([
            'user_id' => 20,
            'name' => 'Olivia',
            'last_name' => 'Smith',
            'birthdate' => '1982-09-05',
        ]);
    }
}
