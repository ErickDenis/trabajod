<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'vacant_id',
        'name',
        'description',
        'is_negotiable',
    ];

    public function vacant()
    {
        return $this->belongsTo(Vacant::class);
    }
}
