<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    use HasFactory;

    public function logro(){
        return $this->belongsTo(Logro::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];
}
