<?php

namespace App\Livewire;

use App\Models\Empresa;

use App\Models\DadosLeitura;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Motor extends Component
{
    
    public $id;

    public function mostraCorrente()
    {
        return DadosLeitura::where('motor_id', $this->id)->latest()->first();
    }
    
    public function render()
    {
        return view('livewire.motor');
    }
}
