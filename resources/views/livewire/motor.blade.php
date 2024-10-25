<div wire:poll.5s>
    <p>Corrente: 
    @switch(json_decode($this->estaRespondendo($motor))->status)
        @case(0)
            <span class="badge text-bg-warning text-wrap">{{ $dadosLeitura->created_at->format('d/m/Y H:i:s') }}</span>
            @break
        @case(1)
            <span class="badge text-bg-success">{{ $dadosLeitura->corrente }}</span>
            @break
        @case(2)
            <span class="badge text-bg-danger">{{ $dadosLeitura->corrente }}</span>
            @break
        @case(3)
            <span class="badge text-bg-secondary text-wrap">Nenhum registro</span>
    @endswitch
    </p>
    <p>Empresa: <span class="fw-semibold">{{ $motor->empresa->nome }}</span></p>
</div>
