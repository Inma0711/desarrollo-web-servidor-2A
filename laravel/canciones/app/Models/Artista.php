<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    public function canciones(){
        return $this->hasMany(Cancion::class); //Un artista, cuantas canciones tiene?
        // Si es 1  -> belongsTo
        // Si muchas -> hasMany
    }
}
