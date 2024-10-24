<?php

namespace App\Livewire;

use App\Models\DadosLeitura;
use App\Models\Empresa;

use Livewire\Component;

class Motores extends Component
{
    public $empresa;

    public function estaRespondendo($motor)
    {
        $leitura = $motor->dadosLeitura->last();

        if (!$leitura) {
            return "Nenhuma leitura";
        }
        
        $tempo = strtotime($leitura->dataLeitura." ".$leitura->horaLeitura);

        $diferenca = time() - $tempo;

        if($diferenca <= 15)
            return "Respondendo: ".$diferenca;
        else
            return "Não está respondendo: ".$diferenca;
        
    }

    public function render()
    {
        return view('livewire.motores', ["motores" => $this->empresa->motor]);
    }
}