<div wire:poll.5s>
    <div class="container text-center">
        <div class="row gy-3">
            @foreach ($motores as $motor)
                <div class="col-4">
                    <a href="{{ route('motor', $motor->id) }}" wire:navigate>
                        @switch(json_decode($this->estaRespondendo($motor))->status)
                            @case(0)
                                <span class="badge text-bg-warning text-wrap">{{ $motor->dadosLeitura->last()->created_at->format('d/m/Y H:i:s') }}</span>
                                @break
                            @case(1)
                                <span class="badge text-bg-success text-wrap">{{ $motor->descricao }}</span>
                                @break
                            @case(2)
                                <span class="badge text-bg-danger text-wrap">{{ $motor->descricao }}</span>
                                @break
                            @case(3)
                                <span class="badge text-bg-secondary text-wrap">Nenhum registro</span>
                                @break
                        @endswitch
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>