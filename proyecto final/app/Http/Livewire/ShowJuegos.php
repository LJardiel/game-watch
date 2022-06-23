<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Juego;

class ShowJuegos extends Component
{
    public $buscador;
    public $juegos;

    public function mount(){
        $this->juegos=Juego::all();
    }

    public function buscar(){
        $this->juegos=Juego::where('titulo','like','%'.$this->buscador.'%')->get();
    }

    public function render()
    {
        return view('livewire.show-juegos');
    }
}