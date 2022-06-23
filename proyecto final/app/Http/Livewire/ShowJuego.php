<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Juego;

class ShowJuego extends Component
{
    public Juego $juego;

    public function mount(Juego $juego){
        $this->juego=Juego::find($juego->id);
    }

    public function render(Juego $juego)
    {
        return view('livewire.show-juego', ['juego'=>$juego]);
    }
}
