<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Juego;
use App\Models\Logro;
use App\Models\Guia;

class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guias.create');
    }

    public function create2($idLogro)
    {
        //
        return view('guias.create',['idLogro'=>$idLogro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $guia= new guia();
        $guia->titulo=$request->titulo;
        $guia->instrucciones=$request->instrucciones;
        $guia->user_id=Auth()->user()->id;
        $guia->logro_id=$request->idLogro;

        $guia->save();

        return redirect()->route('verJuegos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $guia= Guia::find($id);
        return view('guias.edit',['guia'=>$guia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $guia= Guia::find($id);
        $guia->titulo=$request->titulo;
        $guia->instrucciones=$request->instrucciones;
        $guia->user_id=Auth()->user()->id;
        $guia->logro_id=$request->idLogro;

        $guia->save();

        return redirect()->route('verJuegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $guia= Guia::find($id);
        $guia->delete();
        return back();
    }
}
