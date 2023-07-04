<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'description',
        'min_budget',
        'max_budget',
        'acepted_budget',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function conditions()
    {
        return $this->hasMany(Condition::class);
    }

    public function postulant_vacants() {
        return $this->belongsToMany(Postulant_Vacant::class);
    }
}
