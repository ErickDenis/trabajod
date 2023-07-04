<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vacant;

class VacantsSeeder extends Seeder
{
    public function run()
    {
        Vacant::create([
            'company_id' => 1,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 2,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 3,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 4,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 5,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 6,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 3,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 2,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 7,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 8,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
        Vacant::create([
            'company_id' => 1,
            'name' => 'nombre',
            'description' => 'description',
            'min_budget' => 10.20,
            'max_budget' => 10.20,
            'acepted_budget' => 10.20,
        ]);
    }
}
