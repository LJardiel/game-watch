<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Juego;
use App\Models\Logro;
use App\Models\Guia;
use App\Models\User;
use Auth;

class CrearGuia extends Component
{
    public $titulo;
    public $instrucciones;
    public $user_id;
    public $logro;
    public $open=false;

    public $idGuia;

    protected $listeners = ['editarGuia' => 'editarGuia', 'submit', 'destroy'];

    protected $rules = [
        'titulo' => 'required',
        'instrucciones' => 'required'
    ];

    public function abrirModal(){
        $this->open=true;
    }

    public function cerrarModal(){
        $this->open=false;
    }

    public function limpiar(){
        $this->titulo="";
        $this->instrucciones="";
        $this->user_id="";
    }

    public function editarGuia($idGuia)
    {
        $this->idGuia = $idGuia;
        $guia = Guia::find($this->idGuia);
        $this->titulo = $guia->titulo;
        $this->instrucciones = $guia->instrucciones;
        $this->abrirModal();
    }


    public function destroy($id)
    {
        Guia::find($id)->delete();
        $this->emit('refreshList');

    }



    public function submit()
    {
        $this->validate();
        Guia::updateOrCreate(['id'=>$this->idGuia],[
            'titulo' => $this->titulo,
            'instrucciones' => $this->instrucciones,
            'user_id' =>Auth()->user()->id,
            'logro_id' => $this->logro->id
        ]);
        $this->cerrarModal();
        $this->limpiar();
        $this->idGuia=null;
        $this->emit('refreshList');
        
    }

    public function render()
    {
        return view('livewire.crear-guia');
    }
}
