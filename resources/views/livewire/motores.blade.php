<div wire:poll.5s>
    <h1>Motores</h1>
    <br>
    @foreach($empresas as $empresa)
        <h3>Empresa {{ $empresa->nome }}</h3>
        @foreach($empresa->motor as $motor)
            <p> - <a href="/motor/{{$motor->id}}">{{ $motor->descricao }}: {{ $this->estaRespondendo($motor->id) }}</a></p>
        @endforeach
    @endforeach
</div>