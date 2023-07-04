<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbitration extends Model
{
    use HasFactory;

    protected $fillable = [
        'mediator_id',
        'name',
        'description',
        'status',
        'proof_company',
        'proof_applicant',
    ];

    public function mediator()
    {
        return $this->belongsTo(Mediator::class);
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
}
