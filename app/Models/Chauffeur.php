<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    public function affectations(){
        return $this->hasMany(Affectation::class);
    }
}
