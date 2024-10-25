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
            return json_encode(['status' => 3]);
        }
        
        $tempo = strtotime($leitura->dataLeitura." ".$leitura->horaLeitura);

        $diferenca = time() - $tempo;

        if($diferenca <= 15) {
            if ($leitura->corrente > 50) {
                return json_encode(['status' => 2]);
            }
            return json_encode(['status' => 1]);
        } else {
            return json_encode(['status' => 0]);
        }
    }

    public function render()
    {
        return view('livewire.motores', ["motores" => $this->empresa->motor]);
    }
}