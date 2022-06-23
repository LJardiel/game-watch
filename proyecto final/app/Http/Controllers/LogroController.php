<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Juego;
use App\Models\Logro;
use App\Models\Guia;

class LogroController extends Controller
{
    //
    public function show(Logro $logro, Guia $guia)
    {
        //
        $logro=Logro::find($logro->id);
        $guia=Guia::where('logro_id', $logro->id)->get();

        return view('logros.show',['logro'=>$logro, 'guia'=>$guia]);
    }

}
