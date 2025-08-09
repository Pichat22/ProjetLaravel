<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    public function voiture(){
        return $this->belongsTo(Voiture::class);
    }

    public function chauffeur(){
        return $this->belongsTo(Chauffeur::class);
    }
}
