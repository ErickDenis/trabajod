<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulant_Vacant extends Model
{
    use HasFactory;
    
    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
}
