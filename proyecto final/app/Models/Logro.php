<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logro extends Model
{
    use HasFactory;

    public function juego(){
        return $this->belongsTo(Juego::class);
    }

    public function guias(){
        return $this->hasMany(Guia::class);
    }
}
