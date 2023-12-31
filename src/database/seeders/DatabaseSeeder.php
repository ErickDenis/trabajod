<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(PostulantsSeeder::class);
        $this->call(MediatorsSeeder::class);

        $this->call(VacantsSeeder::class);
        $this->call(ConditionsSeeder::class);

        $this->call(Professional_ProfilesSeeder::class);
    }
}
