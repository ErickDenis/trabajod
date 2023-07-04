<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'name',
        'description',
        'condition_of_acceptance',
        'price',
        'start_date',
        'finish_date',
        'status',
    ];
}
