<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Juego;
use App\Models\Logro;
use App\Models\Guia;

class JuegoController extends Controller
{
    //
    public function juego(){
        //$juego=Juego::orderBy('titulo')->get();
        $juegos=Juego::orderBy('titulo')->paginate(8);
        
        return view('verJuegos',['juegos'=>$juegos]);
    }

    public function show(Juego $juego)
    {
        //
        $juego=Juego::find($juego->id);

        return view('juegos.show',['juego'=>$juego]);
    }
}
