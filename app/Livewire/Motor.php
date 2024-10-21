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
        $dados = DadosLeitura::where('motor_id', 1)->latest()->first();
        dd($dados);
        // return DadosLeitura::latest()->first();
        return $dados;
    }
    
    public function render()
    {
        return view('livewire.motor');
    }
}
