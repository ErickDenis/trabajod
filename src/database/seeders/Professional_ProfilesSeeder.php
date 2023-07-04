<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Professional_Profile;

class Professional_ProfilesSeeder extends Seeder
{
    public function run()
    {
        Professional_Profile::create([
            'postulant_id' => 1,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 2,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 3,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 4,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 5,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 6,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 7,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 8,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 9,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
        Professional_Profile::create([
            'postulant_id' => 10,
            'title' => 'curriculum 1',
            'description' => 'description',
            'tags' => 'tags, tags, tags',
            'path_to_file' => 'path_to_file'
        ]);
    }
}
