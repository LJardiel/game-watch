<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Logro;

class ShowLogro extends Component
{
    protected $listeners = ['refreshList' => '$refresh'];
    public Logro $logro;
    public $idLogro;

    public function mount(Logro $logro){
        $this->logro=Logro::find($logro->id);
       // $idLogro=$this->logro=Logro::find($logro->id);
        //$this->emit('submit', $idLogro);
    }

    public function render(Logro $logro)
    {
        return view('livewire.show-logro', ['logro'=>$logro]);
    }
}