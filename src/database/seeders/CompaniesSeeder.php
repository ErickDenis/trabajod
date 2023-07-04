<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'user_id' => "1",
            'name_of_company' => "Yacimientos Petrolíferos Fiscales Bolivianos",
            'description' => "YPFB (Yacimientos Petrolíferos Fiscales Bolivianos)",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "2",
            'name_of_company' => "Empresa Nacional de Telecomunicaciones",
            'description' => "Entel (Empresa Nacional de Telecomunicaciones)",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "3",
            'name_of_company' => "Banco Mercantil",
            'description' => "Banco Mercantil Santa Cruz",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "4",
            'name_of_company' => "Banco Nacional de Bolivia",
            'description' => "Banco Nacional de Bolivia",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "5",
            'name_of_company' => "TIGO",
            'description' => "TIGO",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "6",
            'name_of_company' => "Fábrica Nacional de Cemento S.A.",
            'description' => "Fábrica Nacional de Cemento S.A.",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "7",
            'name_of_company' => "Quipus",
            'description' => "Quipus",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "8",
            'name_of_company' => "VIVA",
            'description' => "VIVA Bolivia",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "9",
            'name_of_company' => "PIL",
            'description' => "Pil Andina S.A.",
            'path_of_photo' => "",
            'address' => "",
        ]);

        Company::create([
            'user_id' => "10",
            'name_of_company' => "Banco de la Integración",
            'description' => "Banco BISA",
            'path_of_photo' => "",
            'address' => "",
        ]);
    }
}
