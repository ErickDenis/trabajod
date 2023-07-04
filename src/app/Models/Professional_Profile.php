<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional_Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'postulant_id',
        'path_to_file',
        'title',
        'description',
        'tags',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
