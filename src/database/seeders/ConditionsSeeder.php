<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Condition;

class ConditionsSeeder extends Seeder
{
    public function run()
    {
        Condition::create([
            'vacant_id' => 1,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
        Condition::create([
            'vacant_id' => 1,
            'name' => 'condicion 2',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);
        Condition::create([
            'vacant_id' => 1,
            'name' => 'condicion 3',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);

        Condition::create([
            'vacant_id' => 2,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
        Condition::create([
            'vacant_id' => 2,
            'name' => 'condicion 2',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);
        Condition::create([
            'vacant_id' => 3,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);

        Condition::create([
            'vacant_id' => 4,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
        Condition::create([
            'vacant_id' => 4,
            'name' => 'condicion 2',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);
        Condition::create([
            'vacant_id' => 4,
            'name' => 'condicion 3',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);

        Condition::create([
            'vacant_id' => 5,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);
        Condition::create([
            'vacant_id' => 5,
            'name' => 'condicion 2',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);

        Condition::create([
            'vacant_id' => 6,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);

        Condition::create([
            'vacant_id' => 7,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => false,
        ]);

        Condition::create([
            'vacant_id' => 7,
            'name' => 'condicion 2',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);

        Condition::create([
            'vacant_id' => 8,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);

        Condition::create([
            'vacant_id' => 9,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);

        Condition::create([
            'vacant_id' => 10,
            'name' => 'condicion 1',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
        Condition::create([
            'vacant_id' => 10,
            'name' => 'condicion 2',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
        Condition::create([
            'vacant_id' => 10,
            'name' => 'condicion 3',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
        Condition::create([
            'vacant_id' => 10,
            'name' => 'condicion 4',
            'description' => 'nombre',
            'is_negotiable' => true,
        ]);
    }
}
