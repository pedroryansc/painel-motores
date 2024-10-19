<?php

namespace App\Livewire;

use App\Models\DadosLeitura;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Motor extends Component
{
    #[Computed]
    public function dados()
    {
        return DadosLeitura::latest()->first();
    }
    
    public function render()
    {
        return view('livewire.motor');
    }
}
