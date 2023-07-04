<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'postulant__vacant_id',
        'name',
        'description',
        'budget',
        'start_date',
        'finish_date',
    ];

    public function stages()
    {
        return $this->hasMany(Stages::class);
    }

    public function postulant_vacant()
    {
        return $this->belongsTo(Postulant_Vacant::class);
    }
}
